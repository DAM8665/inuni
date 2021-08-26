@extends('partials.base')
@section('content')
    <header class="page-header" style="height: 12rem">
    </header>
    <section class="content-section" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="side-content left">
                        <h2>{{$university->Name}}</h2>
                        <h3>{{\App\Models\City::find($university->CityID)->Name}} ,Iran</h3>
                        <p>
                            {{$university->Info}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- end side-content -->
                    <div class="clearfix spacing-50"></div>
                    <div class="side-icon-list">
                        <ul>
                            <li>
                                <div class="content">
                                    <h5>Description</h5>
                                    <p>
                                        {{$university->Description}}
                                    </p>
                                    <br>
                                    <br>
                                    <h5>Specifications</h5>

                                    <p><span style="font-weight: bold">QS World University Ranking:</span><br>
                                        {{$university->QSWorldUniversityRankings}}
                                    </p>
                                    <p><span style="font-weight: bold;">Job Opportunities:</span><br>
                                        {{$university->JobOpportunities}}
                                    </p>
                                    <p><span style="font-weight: bold">Distance between the university and the city center:</span><br>
                                        {{$university->UniToCityCenter}} Kilometers
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end side-icon-list -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <figure class="side-image" data-scroll data-scroll-speed="1"><img
                            src="{{asset('public')}}/images/universities/uni-{{$university->UniversityID}}.jpg"
                            alt="Image"></figure>
                </div>
                <br>
                <br>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="content-section no-spacing" data-background="#fffbf7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="side-icon-list">
                        <ul>
                            <li>
                                <div class="content">
                                    <h5>Facilities</h5>
                                    <p>
                                        <span style="font-weight: bold">Cafeteria:</span>
                                        <br>
                                        @if (\App\Models\UniversityFacility::getByUniversity($university)->Cafeteria)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                    <p>
                                        <span style="font-weight: bold">Parking Places:</span>
                                        <br>
                                        @if (\App\Models\UniversityFacility::getByUniversity($university)->ParkingPlaces)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                    <p>
                                        <span style="font-weight: bold">Events:</span>
                                        <br>
                                        @if (\App\Models\UniversityFacility::getByUniversity($university)->Events)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                    <p>
                                        <span style="font-weight: bold">Restaurant:</span>
                                        <br>
                                        @if (\App\Models\UniversityFacility::getByUniversity($university)->Restaurant)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                    <p>
                                        <span style="font-weight: bold">Gym:</span>
                                        <br>
                                        @if (\App\Models\UniversityFacility::getByUniversity($university)->Gym)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <h5>Faculties</h5>
                                    <p>
                                        @foreach (\App\Models\Faculty::where('UniversityID',$university->UniversityID)->get() as $faculty)
                                            <span style="font-weight: bold">{{$faculty->Name}}</span>
                                            <br>
                                            Lab: @if (\App\Models\FacultyFacility::getByFaculty($faculty)->Lab)
                                                Yes @else No @endif
                                            <br>
                                            Library: @if (\App\Models\FacultyFacility::getByFaculty($faculty)->Library)
                                                Yes @else No @endif
                                            <br>
                                            Conferences: @if (\App\Models\FacultyFacility::getByFaculty($faculty)->Conferences)
                                                Yes @else No @endif
                                            <br>
                                            Scientific & Academic Exhibitions: @if (\App\Models\FacultyFacility::getByFaculty($faculty)->ScientificAcademicExhibitions)
                                                Yes @else No @endif
                                            <br>
                                        @endforeach
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="side-icon-list">
                        <ul>
                            <li>
                                <div class="content">
                                    <h5>Accommodation Costs</h5>
                                    <p>
                                        <span style="font-weight: bold">Dormitories:</span>
                                        <br>
                                        {{\App\Models\AccommodationCost::getByUniversity($university)->Dormitories}}
                                    </p>
                                    <p>
                                        <span style="font-weight: bold">Out Of Universities:</span>
                                        <br>
                                        {{\App\Models\AccommodationCost::getByUniversity($university)->OutOfUniversities}}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="side-icon-list">
                        <ul>
                            <li>
                                <div class="content">
                                    <h5>Contact With University</h5>

                                    <p><span style="font-weight: bold">Website: </span><br>
                                        <a href="{{$university->Website}}">{{$university->Website}}</a>
                                    </p>
                                    <p><span style="font-weight: bold">Email: </span><br>
                                        <a href="mailto:{{$university->EmailAddress}}">{{$university->EmailAddress}}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section" data-background="#fffbf7">
    </section>

@endsection
