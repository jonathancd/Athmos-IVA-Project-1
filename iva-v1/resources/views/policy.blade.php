@extends('template')

@section('title')
    Giorni Rimborso
@endsection


@section('page-title')  
    <div class="page-header-section">
      <div class="container">
        <div class="row">
          <div class="page-header-area">
            <div class="page-header-content">
              <h2>{{App\Translation::getTranslation('privacy_title')}}</h2>
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

          <div class="row">
            <div class="col-md-12">
              <p style="text-align: justify!important;">
                {{App\Translation::getTranslation('privacy_introduction')}}
              </p>
              <br>
            </div>
          </div>

          <h2>{{App\Translation::getTranslation('privacy_type_data_subtitle')}} </h2>

          <div class="row">
            <div class="col-md-12">
              <p style="font-size: 16px!important; font-weight: 400;">
                1) {{App\Translation::getTranslation('privacy_type_1_sub')}}
              </p>
              <p class="justify-95">
                {{App\Translation::getTranslation('privacy_type_1_text')}}
              </p>
              <br>

              <p style="font-size: 16px!important; font-weight: 400;">
                2) {{App\Translation::getTranslation('privacy_type_2_sub')}}
              </p>
              <p class="justify-95">
                {{App\Translation::getTranslation('privacy_type_2_text')}}
              </p>
              <br>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <h4>{{App\Translation::getTranslation('privacy_treatment_subtitle')}}</h4>

              <p class="justify-95">
                {{App\Translation::getTranslation('privacy_treatment_text')}}
              </p>
              <br>

              <h4>{{App\Translation::getTranslation('privacy_holder_subtitle')}}</h4>
              <p class="justify-95">
                {{App\Translation::getTranslation('privacy_holder_text')}} 
              </p>
            </div>
        </div>

        </div>
      </div><!-- Container Ends -->
    </section>


@endsection