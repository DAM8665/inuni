@extends('partials.base')
@section('content')
    <header class="page-header" data-background="images/page-header.jpg">
        <div class="inner">
            <svg width="580" height="400" class="svg-morph">
                <path id="svg_morph"
                      d="m261,30.4375c0,0 114,6 151,75c37,69 37,174 6,206.5625c-31,32.5625 -138,11.4375 -196,-19.5625c-58,-31 -86,-62 -90,-134.4375c12,-136.5625 92,-126.5625 129,-127.5625z"/>
            </svg>
            <h1>Universities</h1>
            <p>
                Select your desired universities.
            </p>
        </div>
    </header>
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <!-- end row -->
            <div class="row justify-content-center">
                @foreach(\App\Models\University::all() as $university)
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-box" data-scroll data-scroll-speed="1.5">
                            <figure><img src="{{asset('public')}}/images/universities/uni-{{$university->UniversityID}}.jpg" alt="Image"></figure>
                            <h4><a href="{{route('universities.show',$university->UniversityID)}}">{{$university->Name}}</a></h4>
                            <p>
                                {{$university->Info}}
                            </p>
                        </div>
                        <!-- end collection-box -->
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
