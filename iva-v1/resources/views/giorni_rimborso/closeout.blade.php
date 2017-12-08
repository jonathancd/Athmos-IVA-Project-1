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
              <h2>S.N.C. or LTD on closeout</h2>
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
          <p class="section-subcontent">Fill the data to receive our evaluation</p>
         

          <form  action="{{url('/giorni-rimborso/2/authorization')}}" method="post" class="form-content fadeIn animated">

            <input type="hidden" name="token" value="{{$token}}">

            <div class="bg-gray-200">
              <div class="card-body">
                <!-- <h5 class="card-body-title">Fill the data to receive our evaluation</h5> -->

                <div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Classe di fatturato precedente</label>
                        <select name="fatturato" class="form-control">
                          <option value="1">0 - 30 k</option>
                          <option value="2">30 - 100 k</option>
                          <option value="3">> 100 k</option>
                        </select>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('fatturato') }}</span>
                      </div>
                    </div>
                  <!-- </div> -->

                  <!-- <div class="row"> -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Provincia sede legale</label>
                        <select name="provincia" class="form-control">
                            @foreach(App\Provincia::all() as $provincia)
                              <option value="{{$provincia->id}}">{{$provincia->name}}</option>
                            @endforeach
                        </select>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('provincia') }}</span>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Ammontare IVA</label>
                        <!-- <input type="text" name="iva" class="form-control"  value="{{ old('iva') }}"> -->
                        <div class="left-inner-addon">
                            <i class="fa fa-eur" aria-hidden="true"></i>
                            <input type="text" min="0.1" name="iva" class="form-control ammontare-iva"  value="{{ old('iva') }}" placeholder="Esempio: 450.5">
                        </div>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('iva') }}</span>
                      </div>
                    </div>
                  <!-- </div> -->


                  <!-- <div class="row"> -->
                    <div class="col-md-4">

                      <div class="form-group">
                        <label>Data rimborso</label>
                        <div class="left-inner-addon">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                          <input type="text" class="form-control fc-datepicker" value="{{ old('date') }}" name="date" placeholder="GG-MM-AAAA">

                          <span class="text-danger" style="font-size: 13px;">{{ $errors->first('date') }}</span>
                        </div>
                      </div>

                    </div>
                  <!-- </div> -->


                  <!-- <div class="row"> -->
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Modello IVA</label>
                        <select name="modello" class="form-control">
                          @foreach(App\Year::all() as $year)
                            <option value="{{$year->id}}">IVA {{$year->year}}</option>
                          @endforeach
                        </select>

                        <span class="text-danger" style="font-size: 13px;">{{ $errors->first('modello') }}</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Stato Partita IVA</label>
                      
                      <div style="display: inline-block; margin: 0px 25px;">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="stato" id="inlineRadio1" value="1"> Aperta
                        </label>
                      </div>

                      <div style="display: inline-block;">
                        <label class="form-check-label">
                          <input class="form-check-input" type="radio" name="stato" id="inlineRadio2" value="0"> Chiusa
                        </label>
                      </div>  

                      <span class="text-danger" style="font-size: 13px;">{{ $errors->first('stato') }}</span>
                      
                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <button id="btn-continue" class="btn btn-hub" disabled>Continue</button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </form>

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