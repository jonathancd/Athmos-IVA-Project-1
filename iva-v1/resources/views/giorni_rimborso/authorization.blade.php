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
              <h2>Evaluation completed</h2>
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
          <!-- <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s"> -->
           <!-- Fill the data to receive our evaluation -->
          <!-- </h1> -->
          <p class="section-subcontent">Compila con i tuoi  dati  Aziendali per procedere con la procedura</p>
         

          <form action="{{url('/giorni-rimborso/authorization/send-email')}}" method="post" class="form-content fadeIn animated">

            @if(!empty($rimborso))
              <input type="hidden" name="token" value="{{$rimborso->token}}">
            @endif

            <div class="bg-gray-200">
              <div class="card-body">
                <!-- <h5 class="card-body-title">Fill the data to receive our evaluation</h5> -->

                <div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control"  value="{{ old('name') }}" required>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('name') }}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"  value="{{ old('email') }}" required>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('email') }}</span>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Telephone</label>
                        <input type="text" name="telephone" class="form-control telephone-input"  value="{{ old('telephone') }}" required>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('telephone') }}</span>
                      </div>
                    </div>

                  </div>



                  <div class="row">
                    <div class="col-md-12">
                      <label>Evaluacion plataforma  HUB TRIBUTARIO</label>

                      @if(!empty($rimborso))
                        <div class="left-inner-addon">
                            <i class="fa fa-eur" aria-hidden="true"></i>
                            
                            <!-- <input type="number" min="0.1" name="evaluation" class="form-control"  value="{{ number_format($rimborso->evaluation, 2, '.', ',') }}" readonly> -->

                            <span class="form-control" style="padding-left: 25px;">{{ number_format($rimborso->evaluation, 2, '.', ',') }}</span>
                        </div>
                      @endif

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('evaluation') }}</span>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">


                      <p style="margin-top: 25px; text-align: center;">
                        Clicking on CONTINUE you will receive an email with a summary of the inserted data.
                        <br>
                        You will be contacted shortly to confirm the evaluation.
                      </p>


                        <div style="display: inline-block; margin: 0px 25px;">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="authorization" id="radioAuth" value="1"> I authirize HUB Tributario to process personal data for the sole purpose of being able to
                          </label>
                        </div>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('stato') }}</span>
                        
                      </div>
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <button id="btn-continue-auth" class="btn btn-hub" disabled>Continue</button>
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
    $('#radioAuth' ).click(function () {
        $('#btn-continue-auth').prop("disabled", false);
    }).change()



    $('#btn-continue').click(function(){

        var empty = $("input").filter(function() {
            return this.value === "";
        });
        if(empty.length) {
            console.log("faltan inputs: "+empty.length);
        }

    });


  </script>
@endsection