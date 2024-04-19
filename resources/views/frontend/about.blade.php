@extends('frontend.layouts.main')
@section('content')
<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>About Me</h2>
                <div class="page_link">
                    <a href="{{route('home')}}">Home</a>
                    <a href="about-us.html">About Me</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<section class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>offerings to my clients</h2>
            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        </div>
        <div class="feature_inner row">
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-city"></i>
                    <h4>Architecture</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-skyline"></i>
                    <h4>Interior Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-sketch"></i>
                    <h4>Concept Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-city"></i>
                    <h4>Architecture</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-skyline"></i>
                    <h4>Interior Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-sketch"></i>
                    <h4>Concept Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $17 each.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area testi_two p_120">
    <div class="container">
        <div class="main_title">
            <h2>Testimonials</h2>
            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
        </div>
        <div class="testi_inner">
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
