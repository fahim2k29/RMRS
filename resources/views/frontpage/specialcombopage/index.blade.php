@extends('homepage.app')

@section('title')
  Special Combo
@endsection

@section('content')
<!--Banner Inner-->
<section>
    <div class="lgx-banner lgx-banner-inner">
        <div class="lgx-page-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lgx-heading-area">
                            <div class="lgx-heading lgx-heading-white">
                                <h2 class="heading-title">Specials Combo</h2>
                            </div>
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                <li class="active">Specials</li>
                            </ul>
                        </div>
                    </div>
                </div><!--//.ROW-->
            </div><!-- //.CONTAINER -->
        </div><!-- //.INNER -->
    </div>
</section> <!--//.Banner Inner-->

<main>
    <div class="lgx-page-wrapper">
        <div class="container">
          <div class="row">

            @foreach($specialcombos as $specialcombo)
                <div class="col-md-4">
                    <div class="lgx-single-speacial lgx-card-single">
                        <figure>
                            <a href="#"><img src="{{ asset('uploads/food') }}/{{ $specialcombo->food_photo }}" alt="Offers"/></a>
                            <figcaption>
                                <div class="speacial-price">
                                    <span>৳</span> {{ $specialcombo->food_price }}
                                </div>
                            </figcaption>
                        </figure>
                        <div class="speacial-info">
                            <h3 class="title"><a href="#">{{ $specialcombo->food_name }}</a></h3>
                            <p><a href="#">{{ $specialcombo->relationshipBetweenFoodCategory->food_category_name }}</a></p>

                        </div>
                    </div>
                </div>
              @endforeach



            </div>
        </div><!-- //.CONTAINER -->
    </div>
</main>
@endsection
