@extends('template')

@section('title')
    Giorni Rimborso
@endsection


@section('page-title')  

@endsection


@section('container')

    <section class="error-section section split">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-xs-center wow fadeInLeft" data-wow-delay="0.1s">
            <h1>Hey</h1>
            <h4>{{App\Translation::getTranslation('already_sent_alert')}}</h4>
            <a href="{{url('/')}}" class="mt-30 btn btn-outline btn-lg">
              <i class="fa fa-home"></i> 
              {{App\Translation::getTranslation('already_sent_return')}}
            </a>
          </div>
        </div>
      </div>
    </section>


@endsection