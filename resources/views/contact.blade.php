@extends('partials.base')
@section('content')
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                      d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
            </svg>
            <h1>Contact Us</h1>
            <p>For the latest updates about universities</p>
        </div>
        <!-- end inner -->
    </header>
    <!-- end page-header -->
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <figure><img src="{{asset('public')}}/images/title-shape.png" alt="Image"></figure>
                        <h2>Help us to respond to <br>
                            you more quickly</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-5">
                    <div class="contact-box">
                        <h6>Main Contact Number</h6>
                        <p>+4917645836951 (Monday to Friday, 9am to 5pm)</p>
                        <p>Please use this number if you would like to contact.</p>
                    </div>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="mb-3">
                            <input type="text" placeholder="Complete Name">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="text" placeholder="E-mail Address">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="text" placeholder="Phone Number">
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <textarea placeholder="Your Message"></textarea>
                        </div>
                        <!-- end mb-3 -->
                        <div class="mb-3">
                            <input type="submit" value="Send Us">
                        </div>
                        <!-- end mb-3 -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
