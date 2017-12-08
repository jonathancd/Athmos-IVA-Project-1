<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Redirect;
use Session;
use Mail;
use PDF;

use App\Rimborso;
use App\Email;
use App\Provincia;
use App\Provincia_Year;
use App\Year;

use Carbon\Carbon;

class HomeController extends Controller
{

    public function evaluation(Request $request, $type){

    	switch ($type) {
            case 1:
            	$validator = Validator::make($request->all(), [
					'fatturato' => 'required|min:1',
					'provincia' => 'required',
					'iva' => 'required|min:1|numeric',
					'date' => 'required|date',
					'modello' => 'required'
				]);
            	break;

            case 2:
            	$validator = Validator::make($request->all(), [
					'fatturato' => 'required|min:1',
					'provincia' => 'required',
					'iva' => 'required|min:1|numeric',
					'date' => 'required|date',
					'modello' => 'required',
					'stato' => 'required'
				]);
            	break;

            case 3:
            	$validator = Validator::make($request->all(), [
					'credit' => 'required',
					'art74' => 'required|min:1|numeric',
					'provincia' => 'required',
					'iva' => 'required|min:1',
					'modello' => 'required',
					'stato' => 'required'
				]);
            	break;
        }


		if ($validator->fails()) {

			return redirect()
				->back()
			    ->withErrors($validator)
			    ->withInput();
		} else {

			// return view('giorni_rimborso.authorization', ['evaluation' => $evaluation, 'type' => $type, 'request' => $request->all()]);

			$token = $request->input('token');
			$rimborso = Rimborso::where('token', $token)->first();

			if(!$rimborso){
				$rimborso = new Rimborso;
				$rimborso->token = $token;
				$rimborso->type = $type;
				$rimborso->valid_date = Carbon::now()->format('Y-m-d');
			}

			switch ($type) {
	            case 1:

	            	$rimborso->fatturato = $request->input('fatturato');
	            	$rimborso->provincia = $request->input('provincia');
	            	// $rimborso->iva = (float) number_format($request->input('iva'), 2, '.', ',');
	            	$rimborso->iva = $request->input('iva');
	            	$rimborso->date = Carbon::parse($request->input('date'));
	            	$rimborso->modello = $request->input('modello');

	            	$table_result = Provincia_Year::where(['id_year' => $rimborso->modello, 'id_provincia' => $rimborso->provincia])->first();

	            	$giorni_rimborso = Rimborso::giorni_rimborso($table_result,$rimborso->fatturato);
	            	$evaluation = Rimborso::evaluation_active_snc_ltd($rimborso->iva, $giorni_rimborso);

					break;
				case 2:
					$rimborso->fatturato = $request->input('fatturato');
	            	$rimborso->provincia = $request->input('provincia');
	            	// $rimborso->iva = (float) number_format($request->input('iva'), 2, '.', ' ');
	            	$rimborso->iva = $request->input('iva');
	            	$rimborso->date = Carbon::parse($request->input('date'));
	            	$rimborso->modello = $request->input('modello');

	            	$rimborso->stato = $request->input('stato');

	            	$table_result = Provincia_Year::where(['id_year' => $rimborso->modello, 'id_provincia' => $rimborso->provincia])->first();

	            	$giorni_rimborso = Rimborso::giorni_rimborso($table_result,$rimborso->fatturato);
	            	$evaluation = Rimborso::evaluation_closeout_snc_ltd($rimborso->iva, $giorni_rimborso, $rimborso->stato);

					break;
	            case 3:
	            	$rimborso->credit = $request->input('credit');
	            	$rimborso->art74 = $request->input('art74');
	            	$rimborso->provincia = $request->input('provincia');
	            	// $rimborso->iva = (float) number_format($request->input('iva'), 2, '.', ' ');
	            	$rimborso->iva = $request->input('iva'); 
					$rimborso->modello = $request->input('modello');

					$rimborso->stato = $request->input('stato');


					$giorni_rimborso = 200;

					$evaluation = Rimborso::evaluation_consultant_receiver($rimborso->iva, $rimborso->art74, $giorni_rimborso, $rimborso->stato);

					break;
        	}

        	$rimborso->giorni_rimborso = $giorni_rimborso;
        	$rimborso->evaluation = $evaluation;
        	$rimborso->save();

			return Redirect::route('confirm', ['token' => $token]);

			// return  redirect('/giorni-rimborso/authorization/confirm')
				// ->with( 'evaluation', $evaluation )
				// ->with( 'type', $type )
				// ->with( 'request', $request->all() );
		}

    }



    public function getAuthorizationConfirm(Request $request, $token){

    	$rimborso = Rimborso::where('token', $token)->first();

		if(!$rimborso){
    		return redirect()
				->back();
    	}

    	return view('giorni_rimborso.authorization', ['rimborso' => $rimborso]);
    }




    public function sendEmail(Request $request){

    	$validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required|email',
			'telephone' => 'required|min:1'
		]);

    	if ($validator->fails()) {
			return redirect()
				->back()
			    ->withErrors($validator)
			    ->withInput();

		} else {

			$token = $request->input('token');
			$rimborso = Rimborso::where('token', $token)->first();

			if(!$rimborso){
				return redirect('/giorni-rimborso/evaluation-already-sended');
			}


			$email = new Email;
			$email->date = Carbon::now()->format('Y-m-d');
			$email->code = date("Y").date('m').date('d');
			$email->save();

			$rimborso->date = Carbon::parse($rimborso->date)->format('d/m/Y');

			$rimborso->provincia = Provincia::find($rimborso->provincia);
			$rimborso->year = Year::find($rimborso->modello);


			$pdf = PDF::loadView('email.index',[
													'data' => $request->all(),
													'rimborso' => $rimborso,
													'email' => $email
												]);

			Mail::send('email.index',
				[
					'data' => $request->all(),
					'rimborso' => $rimborso,
					'email' => $email,
					'pdf' => $pdf
	        	],

	        	function ($m) use ($request, $rimborso, $email, $pdf) {
		            $m->from(config('mail.username'), 'HUB Tributario');

		            $m->to($request->email, $request->name)
		            	->subject('Evaluation '.$email->date.'-'.$email->id);

		            $m->attachData($pdf->output(), 'Evaluation '.$email->date.'-'.$email->id.'.pdf');
	        });

	        Mail::send('email.index',
				[
					'data' => $request->all(),
					'rimborso' => $rimborso,
					'email' => $email,
					'pdf' => $pdf
	        	],

	        	function ($m) use ($request, $rimborso, $email, $pdf) {
		            $m->from(config('mail.username'), 'HUB Tributario');

		            $m->to(config('mail.username'), 'HUB Tributario')
		            	->subject('Evaluation '.$email->date.'-'.$email->id);

		           	$m->attachData($pdf->output(), 'Evaluation '.$email->date.'-'.$email->id.'.pdf');
	        });



			$rimborso->delete();

    		return redirect('/documents')->with('status', 'An email has been sended successfully');
    	}
    }



}
