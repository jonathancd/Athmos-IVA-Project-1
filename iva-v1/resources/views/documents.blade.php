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
              <h2>Bank's request documents</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


@section('container')

    @if (session('status'))
        <div class="alert alert-dark">
            {{ session('status') }}
        </div>
    @endif

    <section class="section">
      <div class="container wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
          <!-- <h1 class="section-title">Documents for bank's request!!!!!!</h1> -->
          <!-- <p class="section-subcontent mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p> -->


          <div class="col-md-12">

            <div id="default-tab" class="mt-10" style="text-align: center;">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"  style="width: 45%;"><a class="nav-link active" href="#richiesta" aria-controls="home" role="tab" data-toggle="tab" style="font-size: 20px;">Documenti da allegare per la richiesta in SPA - SRL <br></a></li>
                  <li class="nav-item"  style="width: 47%;"><a class="nav-link" href="#curatore" aria-controls="profile" role="tab" data-toggle="tab" style="font-size: 20px;">Documenti da allegare per il curatore o commissario liquidatore</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="richiesta">
                    <h4>1) Copia libri iva</h4>
                    <h4>2) Copia fatture acquisto/vendita</h4>
                    <h4>3) Copia dichiarazione iva a rimborso</h4>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="curatore">
                    <h4>1) Copia libri iva</h4>
                    <h4>2) Copia fatture acquisto/vendita</h4>
                    <h4>3) Copia dichiarazione iva a rimborso</h4>
                    <h4>4) Copia dichiarazione iva art 74</h4>
                    <h4>5) Copia fatture per acquisti - parcelle curatore e/o professionisti del fallimento)</h4>
                  </div>

                </div>
              </div>
          </div>
        </div>
      </div>
    </section>


<!-- 
    <section id="page4" class="section">


      <div class="container">
        <div class="row">        
          <p class="section-subcontent">Documenti da allegare per la richiesta in SPA - SRL</p>
            
            1) Copia libri iva
            2) Copia fatture acquisto/vendita
            3) Copia dichiarazione iva a rimborso

          
        </div>



        <div class="row">        
          <p class="section-subcontent">Documenti da allegare per il curatore o commissario liquidatore</p>

            1) Copia libri iva
            2) Copia fatture acquisto/vendita
            3) Copia dichiarazione iva a rimborso
            4) Copia dichiarazione iva art 74
            5) Copia fatture per acquisti - parcelle curatore e/o professionisti del fallimento)
         


        </div>

      </div>
    </section>

 -->
@endsection