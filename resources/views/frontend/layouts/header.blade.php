
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route('frontend.home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.services')}}">Services</a>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('frontend.portfolio')}}">Portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('frontend.project-details')}}">Project Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('frontend.elements')}}">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('frontend.blogs')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('frontend.blog-details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('frontend.contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

