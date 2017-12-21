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
              <h2>{{App\Translation::getTranslation('documents_title')}}</h2>
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
          <!-- <h1 class="section-title">Questi sono i documenti necessari per effettuare una richiesta di rimborso presso un istituto di credito</h1> -->
          <p class="section-subcontent mb-30">
            {{App\Translation::getTranslation('documents_subtitle')}}
          </p>


          <div class="col-md-12">

            <div id="default-tab" class="mt-10" style="text-align: center;">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item"  style="width: 45%;">
                    <a class="nav-link active" href="#richiesta" aria-controls="home" role="tab" data-toggle="tab" style="font-size: 20px;">
                      {{App\Translation::getTranslation('documents_snc_ltd')}}
                      <br>
                    </a>
                  </li>
                  <li class="nav-item"  style="width: 47%;">
                    <a class="nav-link" href="#curatore" aria-controls="profile" role="tab" data-toggle="tab" style="font-size: 20px;">
                      {{App\Translation::getTranslation('documents_consultant')}}
                    </a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="richiesta">
                    <h4>
                      1) {{App\Translation::getTranslation('documents_snc_copy_1')}}
                    </h4>
                    <h4>
                      2) {{App\Translation::getTranslation('documents_snc_copy_2')}}
                    </h4>
                    <h4>
                      3) {{App\Translation::getTranslation('documents_snc_copy_3')}}
                    </h4>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="curatore">
                    <h4>
                      1) {{App\Translation::getTranslation('documents_consultant_copy_1')}}
                    </h4>
                    <h4>
                      2) {{App\Translation::getTranslation('documents_consultant_copy_2')}}
                    </h4>
                    <h4>
                      3) {{App\Translation::getTranslation('documents_consultant_copy_3')}}
                    </h4>
                    <h4>
                      4) {{App\Translation::getTranslation('documents_consultant_copy_4')}}
                    </h4>
                    <h4>
                      5) {{App\Translation::getTranslation('documents_consultant_copy_5')}}
                    </h4>
                  </div>

                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

@endsection