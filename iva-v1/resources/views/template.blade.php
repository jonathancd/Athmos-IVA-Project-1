<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      {{config('app.name')}} - @yield('title')
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="{{url('/assets')}}/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="{{url('/assets')}}/fonts/simple-line-icons.css">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/settings.css">

    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/extras/datepicker-ui.css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{url('/assets')}}/css/colors/hub.css" media="screen" />       
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->

    <style type="text/css">
        a{
          color: #666!important;
        }

        .btn-hub{
          background: #BB7631;
        }

        .business-type{
          border: 1px solid lightgray;
          min-height: 251px;
          padding: 25px;
        }
        .business-type:hover{
          border-color: #BB7631!important;;
        }

        .form-group label {
          margin-bottom: 4px!important; 
        }

        .section {
          padding: 75px 0;
        }

        .tab-pane{
          padding: 50px 10px;
        }

        .left-inner-addon {
            position: relative;
        }
        .left-inner-addon input {
            padding-left: 30px;    
        }
        .left-inner-addon i {
            position: absolute;
            padding: 10px 12px;
            pointer-events: none;
            z-index: 1!important;
        }

        .right-inner-addon {
            position: relative;
        }
        .right-inner-addon input {
            padding-right: 30px;    
        }
        .right-inner-addon i {
            position: absolute;
            right: 0px;
            padding: 10px 12px;
            pointer-events: none;
            z-index: 1!important;
        }
    </style>


  </head>
  <body>

  <!-- Header area wrapper starts -->
    <header id="header-wrap">

      <!-- Roof area starts -->
      
      <!-- Roof area Ends -->

      <!-- Header area starts -->
      <section id="header">

        <!-- Navbar Starts -->
        <nav class="navbar navbar-light" data-spy="affix" data-offset-top="50">
          <div class="container">
            <button class='navbar-toggler hidden-md-up pull-xs-right' data-target='#main-menu' data-toggle='collapse' type='button'>
              ☰
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/')}}" style="padding-top: 0px!important;">
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <img src="{{url('/images')}}/LOGO_HUB_TRIBUTARIO_JPEG.jpg" style="height: 70px!important;">
              <!-- IVA -->
            </a>
            <div class="collapse navbar-toggleable-sm pull-xs-left pull-md-right" id="main-menu">
              <!-- Navbar Starts -->
              <ul class="nav nav-inline">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="{{url('/')}}" role="button" aria-haspopup="true" aria-expanded="false">Home</a>                  
                </li>                                     

                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{url('/documents')}}" role="button" aria-haspopup="true" aria-expanded="false">
                    Documents
                  </a>
                </li>          
                 
              </ul>  
            </div>              

          </div>
        </nav>
        <!-- Navbar Ends -->

      </section> 
    <!-- Start Content -->

    <!-- End Content --> 
    </header>
    <!-- Header-wrap Section End -->
   

    <!-- Page Header -->
    @yield('page-title')
    <!-- Page Header End -->


    <!-- Block-1 Section -->
    @yield('container')

    
    <!-- Main Section Ends -->

         
    
    <!-- Footer Section -->
    <footer>
      
      <!-- Copyright -->
      <div id="copyright" style="padding: 25px;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="copyright-text">
                ©  2016 Engage. All right reserved. Designed with by <a href="#">GrayGrids</a>
              </p>
            </div>
            <div class="col-md-6  col-sm-6">
              <ul class="nav nav-inline pull-xs-right">
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>        
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright  End-->
      
    </footer>
    <!-- Footer Section End-->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up">
      </i>
    </a>

    <div class="bottom"> <a href="#" class="settings"></a> </div>

    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="{{url('/assets')}}/js/jquery-min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{url('/assets')}}/js/bootstrap.min.js"></script>
    <!--Text Rotator-->
    <script src="{{url('/assets')}}/js/jquery.mixitup.js"></script>
    <!--WOW Scroll Spy-->
    <script src="{{url('/assets')}}/js/wow.js"></script>
    <!-- OWL Carousel -->
    <script src="{{url('/assets')}}/js/owl.carousel.js"></script>
 
    <!-- WayPoint -->
    <script src="{{url('/assets')}}/js/waypoints.min.js"></script>
    <!-- CounterUp -->
    <script src="{{url('/assets')}}/js/jquery.counterup.min.js"></script>
    <!-- ScrollTop -->
    <script src="{{url('/assets')}}/js/scroll-top.js"></script>
    <!-- Appear -->
    <script src="{{url('/assets')}}/js/jquery.appear.js"></script>
    <script src="{{url('/assets')}}/js/jquery.vide.js"></script>
     <!-- All JS plugin Triggers -->
    <script src="{{url('/assets')}}/js/main.js"></script>
    <!-- <script src="assets/js/color-switcher.js"></script> -->
    

    <script src="{{url('/assets')}}/lib/jquery-ui/jquery-ui.js"></script>


    <script type="text/javascript">
      $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        dateFormat: 'dd-mm-yy'
      });


      $('.ammontare-iva, .art-74, .telephone-input').keypress(function(event) {
        if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
          event.preventDefault();
        }
      });


      $('.ammontare-iva, .art-74, .fc-datepicker').bind("cut copy paste",function(e) {
           e.preventDefault();
      });

    </script>

    @yield('scripts')

  </body>
</html>