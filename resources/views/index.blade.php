@extends('partials.base')
@section('content')
    <header class="slider">
        <div class="swiper-container slider-images">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-background="">
                    <div class="mobile-slide" data-background=""></div>
                </div>
                <div class="
                    swiper-slide" data-background="">
                    <div class="mobile-slide" data-background=""></div>
                </div>
                <div class="swiper-slide" data-background="">
                    <div class="mobile-slide" data-background=""></div>
                </div>
            </div>
            <!-- end swiper-wrapper -->
            <div class="container-fluid slider-nav">
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                <div class="swiper-fraction"></div>
                <!-- end swiper-fraction -->
                <div class="button-prev"><i class="far fa-chevron-down"></i></div>
                <!-- end swiper-button-prev -->
                <div class="button-next"><i class="far fa-chevron-up"></i></div>
                <!-- end swiper-button-next -->
            </div>
            <!-- end slider-nav -->
        </div>
        <!-- end slider-images -->
        <div class="swiper-container slider-texts">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph" d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z" />
            </svg>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1> Major, Faculty <br>
                            And University </h1>
                        <p>The best way to choose your favorite major related to the top universities. <br>
                        </p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>Find your <br>
                            University </h1>
                        <p>Explore the most important information about the faculties and universities. <br>
                        </p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                    <div class="container-fluid">
                        <h1>InUni<br>
                            Come to help you</h1>
                        <p>We make your way easier and safe. <br>
                        </p>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
        </div>
        <!-- end slider-texts -->

    </header>
    <!-- end slider -->
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{asset('public')}}/images/title-shape.png" alt="Image"></figure>
                        <h2> InUni is ready <br>
                            to use</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7">
                    <figure class="image-box" data-scroll data-scroll-speed="-1" > <img src="{{asset('public')}}/images/concentrated-young-african-man-sitting-coworking.jpg" alt="Image"> </figure>
                </div>
                <!-- end col-7 -->
                <div class="col-lg-5">
                    <div class="side-icon-list right-side">
                        <ul>
                            <li>
                                <figure> <img src="{{asset('public')}}/images/icon01.png" alt="Image"> </figure>
                                <div class="content">
                                    <h5>Save your time</h5>
                                    <p>Access the information<br>
                                        Quickly</p>
                                </div>
                                <!-- end content -->
                            </li>
                            <li>
                                <figure> <img src="{{asset('public')}}/images/icon02.png" alt="Image"> </figure>
                                <div class="content">
                                    <h5>Search And Apply Online</h5>
                                    <p>Using InUni website<br>
                                        Make your way comfortable</p>
                                </div>
                                <!-- end content -->
                            </li>
                            <li>
                                <figure> <img src="{{asset('public')}}/images/icon03.png" alt="Image"> </figure>
                                <div class="content">
                                    <h5>Wherever You Are</h5>
                                    <p>You can join us and use our website<br></p>
                                    <a href="#">Join Now and Book Online</a></div>
                                <!-- end content -->
                            </li>
                        </ul>
                    </div>
                    <!-- end side-icon-list -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="video-bg"></div>
        <div class="container">
            <div class="cta-box" data-scroll data-scroll-speed="-1">
                <h6>JOIN TODAY AND ENJOY UNLIMITED</h6>
                <h2>What you need to know about university <br>
                </h2>
                <a href="#" class="custom-button">BECOME A MEMBER</a> </div>
            <!-- end cta-box -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{asset('public')}}/images/title-shape.png" alt="Image"></figure>
                        <h6>Get Latest Updated Information</h6>
                        <h2>Recent Universities</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="container">
            <div class="row">
                @foreach (\App\Models\University::orderBy('UniversityID','DESC')->limit(2)->get() as $item)
                    <div class="col-12">
                        <div class="recent-news">
                            <div class="content-box"> <small>{{$item->getCity()->Name}}, Iran</small>
                                <h3>{{$item->Name}}</h3>
                                <p>
                                    {{$item->Description}}
                                </p>
                                <a href="{{route('universities.show',$item->UniversityID)}}" class="custom-link">Continue reading</a> </div>
                            <!-- end content-box -->
                            <figure data-scroll data-scroll-speed="-1"><img src="{{asset('public')}}/images/universities/uni-{{$item->UniversityID}}.jpg" alt="Image"></figure>
                        </div>
                        <!-- end recent-news -->
                    </div>
                @endforeach
                <div class="col-12 text-center"> <a href="{{route('universities.index')}}" class="circle-button">SEE ALL<br>
                        UNIVERSITIES</a> </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section no-spacing" data-background="#94ffc4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box">
                        <div class="form">
                            <div class="titles">
                                <h6>Subscribe Newsletter</h6>
                                <h2>Sign up to get the
                                    latest news</h2>
                            </div>
                            <!-- end titles -->
                            <div class="inner">
                                <input type="email" placeholder="Enter your e-mail address">
                                <input type="submit" value="SIGN UP">
                            </div>
                            <!-- end inner -->
                            <small>Will be used in accordance with our <a href="#">Privacy Policy</a></small> </div>
                        <!-- end form -->
                        <figure class="newsletter-image" data-scroll data-scroll-speed="0.7"><img src="{{asset('public')}}/images/newsletter-image.png" alt="Image"></figure>
                    </div>
                    <!-- end newsletter-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
@endsection
