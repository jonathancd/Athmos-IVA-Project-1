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
              <!-- <h2>Seleziona la tipologia di azienda</h2> -->
              <h2>{{App\Translation::getTranslation('home_title')}}</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


@section('container')
    <section id="service-block-main" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">        

          <div class="col-sm-6 col-md-4 business-type">
            <!-- Service-Block-1 Item Starts -->
            <a href="{{url('/giorni-rimborso/active-snc-ltd')}}">
                <div class="service-item fadeInUpQuick animated" data-wow-delay=".8s">
              
                <div class="icon-wrapper">
                  <!-- <i class="icon-home pulse-shrink"> -->
                  <i class="fa fa-home  pulse-shrink" aria-hidden="true"></i>
                  </i>
                </div>
                <h2>
                  <!-- SPA o SRL in normale attività.  -->
                  {{App\Translation::getTranslation('active_snc_ltd')}}
                  <br>
                </h2>
                </div>
            </a>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-4 business-type">
            <!-- Service-Block-1 Item Starts -->
            <a href="{{url('/giorni-rimborso/closeout-snc-ltd')}}">
                <div class="service-item fadeInUpQuick animated" data-wow-delay="1.1s">
                  <div class="icon-wrapper">
                    <!-- <i class="icon-energy pulse-shrink"> -->
                    <i class="fa fa-money pulse-shrink" aria-hidden="true"></i>
                    </i>
                  </div>
                  <h2>
                    <!-- SPA o SRL in liquidazione -->
                    {{App\Translation::getTranslation('closeout_snc_ltd')}}
                  </h2>
                </div>
            </a>
            <!-- Service-Block-1 Item Ends -->
          </div>

          <div class="col-sm-6 col-md-4 business-type">
            <!-- Service-Block-1 Item Starts -->
            <a href="{{url('/giorni-rimborso/business-consultant-receiver')}}">
                <div class="service-item fadeInUpQuick animated" data-wow-delay="1.4s">
                  <div class="icon-wrapper">
                    <!-- <i class="icon-user pulse-shrink"> -->
                    <i class="fa fa-user pulse-shrink" aria-hidden="true"></i>
                    </i>
                  </div>
                  <h2>
                    <!-- CURATORE o COMMISSARIO di società in fallimento o in concordato -->
                    {{App\Translation::getTranslation('consultant_receiver')}}
                  </h2>
                </div>
            </a>
          </div><!-- Service-Block-1 Item Ends -->
        </div>
      </div><!-- Container Ends -->
    </section>
@endsection
