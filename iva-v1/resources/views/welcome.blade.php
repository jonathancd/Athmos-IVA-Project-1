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
              <h2>WHAT ARE YOU?</h2>
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
          <!-- <h1 class="section-title wow fadeIn animated" data-wow-delay=".2s"> -->
           <!-- WHAT ARE YOU? -->
          <!-- </h1> -->
          <p class="section-subcontent">Select your type of business</p>
         

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
                  I'm a active s.n.c. <br> or ltd
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
                </p>

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
                    I'm a s.n.c. <br>or ltd on closeout
                  </h2>
                  <p>
                    Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.
                  </p>
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
                    I'm a business consultant <br> or a receiver
                  </h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat Quidem!
                  </p>
                </div>
            </a>
          </div><!-- Service-Block-1 Item Ends -->
        </div>
      </div><!-- Container Ends -->
    </section>
@endsection
