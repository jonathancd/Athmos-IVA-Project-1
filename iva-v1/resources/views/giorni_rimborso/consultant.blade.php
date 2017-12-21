@extends('template')


@section('title')
    Calculate your Giorni Rimborso
@endsection


@section('page-title')  
    <div class="page-header-section">
      <div class="container">
        <div class="row">
          <div class="page-header-area">
            <div class="page-header-content">
              <h2>{{App\Translation::getTranslation('consultant_receiver_title')}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


@section('container')
    <section id="page2" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">        

          <p class="section-subcontent">{{App\Translation::getTranslation('complete_form')}}</p>
         

          <form  action="{{url('/giorni-rimborso/3/authorization')}}" method="post"  class="form-content fadeIn animated">
            
            <input type="hidden" name="token" value="{{$token}}">

            <div class="bg-gray-200">
              <div class="card-body">
                <!-- <h5 class="card-body-title">Fill the data to receive our evaluation</h5> -->

                <div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>{{App\Translation::getTranslation('lbl_art47')}}</label>
                        
                        <div class="col-md-12" style="padding-left: 0px;">

                          <div class="col-md-4" style="padding-left: 0px;">
  	                        <select name="credit" class="form-control">
  	                          <option value="1">Credit</option>
  	                          <option value="2">Debit</option>
  	                        </select>

  	                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('credit') }}</span>
    	                    </div>

    	                    <div class="col-md-6">
    	                        <div class="left-inner-addon">
    	                            <i class="fa fa-eur" aria-hidden="true"></i>
    	                            <input type="text"  min="0.1" name="art74" class="form-control art-74"  value="{{ old('art74') }}" placeholder="{{App\Translation::getTranslation('placeholder_example')}}: 450.5">
    	                        </div>

    	                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('art74') }}</span>
    	                    </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>{{App\Translation::getTranslation('lbl_province')}}</label>
                        <select name="provincia" class="form-control">
                            @foreach(App\Provincia::all() as $provincia)
                              <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                            @endforeach
                        </select>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('provincia') }}</span>
                      </div>
                    </div>
                  <!-- </div> -->


                  <!-- <div class="row"> -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>{{App\Translation::getTranslation('lbl_iva')}}</label>

                        <div class="left-inner-addon">
                            <i class="fa fa-eur" aria-hidden="true"></i>
                            <input type="text" min="0.1" name="iva" class="form-control ammontare-iva"  value="{{ old('iva') }}">
                        </div>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('iva') }}</span>
                      </div>
                    </div>
                  <!-- </div> -->


                  <!-- <div class="row"> -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>{{App\Translation::getTranslation('lbl_iva_model')}}</label>
                        <select name="modello" class="form-control">
                          @foreach(App\Year::all() as $year)
                            <option value="{{$year->id}}">
                              {{App\Translation::getTranslation('lbl_iva_word')}} {{$year->year}}
                            </option>
                          @endforeach
                        </select>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('modello') }}</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>{{App\Translation::getTranslation('lbl_iva_status')}}</label>
                      
                      <div style="display: inline-block; margin: 0px 25px;">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="stato" id="inlineRadio1" value="1"> {{App\Translation::getTranslation('radio_open')}}
                        </label>
                      </div>

                      <div style="display: inline-block;">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="stato" id="inlineRadio2" value="0"> {{App\Translation::getTranslation('radio_closed')}}
                        </label>
                      </div>  
                      
                      <span class="text-danger" style="font-size: 13px;">{{ $errors->first('stato') }}</span>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <button id="btn-continue" class="btn btn-hub">
                        {{App\Translation::getTranslation('btn_continue')}}
                      </button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div><!-- Container Ends -->
    </section>
@endsection


@section('scripts')
  <script type="text/javascript">
    $('#inlineRadio1, #inlineRadio2' ).click(function () {
        $('#btn-continue').prop("disabled", false);
    }).change()
  </script>
@endsection