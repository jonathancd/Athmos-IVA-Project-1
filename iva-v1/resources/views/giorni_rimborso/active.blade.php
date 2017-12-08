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
              <h2>Active S.N.C. or LTD</h2>
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
         

          <form action="{{url('/giorni-rimborso/1/authorization')}}" method="post" class="form-content fadeIn animated">

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
                        <!-- <select name="provincia" class="form-control">
                          <option value="Agrigento">Agrigento</option>
                          <option value="Alessandria">Alessandria</option>
                          <option value="Ancona">Ancona</option>
                          <option value="Aosta">Aosta</option>
                          <option value="L'Aquila">L'Aquila</option>
                          <option value="Arezzo">Arezzo</option>
                          <option value="Ascoli-Piceno">Ascoli-Piceno</option>
                          <option value="Asti">Asti</option>
                          <option value="Avellino">Avellino</option>
                          <option value="Bari">Bari</option>
                          <option value="Barletta-Andria-Trani">Barletta-Andria-Trani</option>
                          <option value="Belluno">Belluno</option>
                          <option value="Benevento">Benevento</option>
                          <option value="Bergamo">Bergamo</option>
                          <option value="Biella">Biella</option>
                          <option value="Bologna">Bologna</option>
                          <option value="Bolzano">Bolzano</option>
                          <option value="Brescia">Brescia</option>
                          <option value="Brindisi">Brindisi</option>
                          <option value="Cagliari">Cagliari</option>
                          <option value="Caltanissetta">Caltanissetta</option>
                          <option value="Campobasso">Campobasso</option>
                          <option value="Carbonia Iglesias">Carbonia Iglesias</option>
                          <option value="Caserta">Caserta</option>
                          <option value="Catania">Catania</option>
                          <option value="Catanzaro">Catanzaro</option>
                          <option value="Chieti">Chieti</option>
                          <option value="Como">Como</option>
                          <option value="Cosenza">Cosenza</option>
                          <option value="Cremona">Cremona</option>
                          <option value="Crotone">Crotone</option>
                          <option value="Cuneo">Cuneo</option>
                          <option value="Enna">Enna</option>
                          <option value="Fermo">Fermo</option>
                          <option value="Ferrara">Ferrara</option>
                          <option value="Firenze">Firenze</option>
                          <option value="Foggia">Foggia</option>
                          <option value="Forli-Cesena">Forli-Cesena</option>
                          <option value="Frosinone">Frosinone</option>
                          <option value="Genova">Genova</option>
                          <option value="Gorizia">Gorizia</option>
                          <option value="Grosseto">Grosseto</option>
                          <option value="Imperia">Imperia</option>
                          <option value="Isernia">Isernia</option>
                          <option value="La-Spezia">La-Spezia</option>
                          <option value="Latina">Latina</option>
                          <option value="Lecce">Lecce</option>
                          <option value="Lecco">Lecco</option>
                          <option value="Livorno">Livorno</option>
                          <option value="Lodi">Lodi</option>
                          <option value="Lucca">Lucca</option>
                          <option value="Macerata">Macerata</option>
                          <option value="Mantova">Mantova</option>
                          <option value="Massa-Carrara">Massa-Carrara</option>
                          <option value="Matera">Matera</option>
                          <option value="Medio Campidano">Medio Campidano</option>
                          <option value="Messina">Messina</option>
                          <option value="Milano">Milano</option>
                          <option value="Modena">Modena</option>
                          <option value="Monza-Brianza">Monza-Brianza</option>
                          <option value="Napoli">Napoli</option>
                          <option value="Novara">Novara</option>
                          <option value="Nuoro">Nuoro</option>
                          <option value="Ogliastra">Ogliastra</option>
                          <option value="Olbia Tempio">Olbia Tempio</option>
                          <option value="Oristano">Oristano</option>
                          <option value="Padova">Padova</option>
                          <option value="Palermo">Palermo</option>
                          <option value="Parma">Parma</option>
                          <option value="Parma">Parma</option>
                          <option value="Perugia">Perugia</option>
                          <option value="Pesaro-Urbino">Pesaro-Urbino</option>
                          <option value="Pescara">Pescara</option>
                          <option value="Piacenza">Piacenza</option>
                          <option value="Pisa">Pisa</option>
                          <option value="Pistoia">Pistoia</option>
                          <option value="Pordenone">Pordenone</option>
                          <option value="Potenza">Potenza</option>
                          <option value="Prato">Prato</option>
                          <option value="Ragusa">Ragusa</option>
                          <option value="Ravenna">Ravenna</option>
                          <option value="Reggio-Calabria">Reggio-Calabria</option>
                          <option value="Reggio-Emilia">Reggio-Emilia</option>
                          <option value="Rieti">Rieti</option>
                          <option value="Rimini">Rimini</option>
                          <option value="Roma">Roma</option>
                          <option value="Rovigo">Rovigo</option>
                          <option value="Salerno">Salerno</option>
                          <option value="Sassari">Sassari</option>
                          <option value="Savona">Savona</option>
                          <option value="Siena">Siena</option>
                          <option value="Siracusa">Siracusa</option>
                          <option value="Sondrio">Sondrio</option>
                          <option value="Taranto">Taranto</option>
                          <option value="Teramo">Teramo</option>
                          <option value="Terni">Terni</option>
                          <option value="Torino">Torino</option>
                          <option value="Trapani">Trapani</option>
                          <option value="Trento">Trento</option>
                          <option value="Treviso">Treviso</option>
                          <option value="Trieste">Trieste</option>
                          <option value="Udine">Udine</option>
                          <option value="Varese">Varese</option>
                          <option value="Venezia">Venezia</option>
                          <option value="Verbania">Verbania</option>
                          <option value="Vercelli">Vercelli</option>
                          <option value="Verona">Verona</option>
                          <option value="Vibo-Valentia">Vibo-Valentia</option>
                          <option value="Vicenza">Vicenza</option>
                          <option value="Viterbo">Viterbo</option>
                        </select> -->
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
                          <input type="text" class="form-control fc-datepicker" value="{{ old('date') }}" name="date" placeholder="GG-MM-AAAA" required>

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


                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <button id="btn-continue" class="btn btn-hub">Continue</button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </form>





        </div>
      </div><!-- Container Ends -->
    </section>

    <script type="text/javascript">
        // Datepicker


    </script>
@endsection



@section('scripts')
  
 <!--  <script type="text/javascript">
    $('#btn-continue').click(function(){

      var empty = $("input").filter(function() {
          return this.value === "";
      });
      if(empty.length) {
          console.log("faltan inputs: "+empty.length);
      }

    });
  </script>
 -->

 <script type="text/javascript">
  // $('.ammontare-iva').keypress(function(event) {
  //   if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
  //     event.preventDefault();
  //   }
  // });
 </script>

@endsection