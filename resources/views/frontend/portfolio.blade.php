@extends('frontend.layouts.main')
@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>Portfolio</h2>
                <div class="page_link">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('portfolio')}}">Portfolio</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Projects Area =================-->
<section class="projects_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Our Recent Completed Projects</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
        </div>
        <div class="projects_fillter">
            <ul class="filter list">
                <li class="active" data-filter="*"><a href="#">All Categories</a></li>
                <li data-filter=".brand"><a href="#">Branding</a></li>
                <li data-filter=".work"><a href="#">Creative Work </a></li>
                <li data-filter=".web"><a href="#">Web Design</a></li>
            </ul>
        </div>
        <div class="projects_inner row">
            <div class="col-lg-4 col-sm-6 brand web">
                <div class="projects_item">
                    <img class="img-fluid" src="{{asset('frontend/img/projects/projects-1.jpg')}}" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 brand work">
                <div class="projects_item">
                    <img class="img-fluid" src="{{asset('frontend/img/projects/projects-2.jpg')}}" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 work">
                <div class="projects_item">
                    <img class="img-fluid" src="{{asset('frontend/img/projects/projects-3.jpg')}}" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 brand web">
                <div class="projects_item">
                    <img class="img-fluid" src="{{asset('frontent/img/projects/projects-4.jpg')}}" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 brand work">
                <div class="projects_item">
                    <img class="img-fluid" src="{{asset('frontend/img/projects/projects-5.jpg')}}" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 brand work web">
                <div class="projects_item">
                    <img class="img-fluid" src="img/projects/projects-6.jpg" alt="">
                    <div class="projects_text">
                        <a href="portfolio-details.html"><h4>3D Helmet Design</h4></a>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Projects Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120">
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
