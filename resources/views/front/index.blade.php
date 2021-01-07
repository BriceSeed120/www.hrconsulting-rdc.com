@extends('layouts.front')

@section('content')
    @include('layouts.parts.front.banner')
    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <h1 class="tagline tagline callout animation-element test2"># Grant Welcome</h1>
                        <h2 class="tagline callout animation-element test2">Welcome to Momo inn</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="general tagline callout animation-element test2">
                        Imagine a charming and picturesque Heritage village in the north part of the countryside, surrounded
                        by the spectacular natural beauty. Experience a relaxing, exciting, comfortable stay in Momo Inn
                        with its glamorous hospitality and its unique atmosphere.</p>
                    <div class="gap-30"></div>
                    <p class="general tagline callout animation-element test2">Apart
                        from luxurious rooms &amp; suites and two swimming pools (one
                        exclusively for ladies) the resort boasts of a plethora of indoor &amp;
                        outdoor activities for both adults and kids which include an
                        internationally acclaimed water park, tennis &amp; badminton courts, 3D
                        movie hall, billiards, amphitheater, a luxurious spa and a
                        well-appointed gym.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="video-holder">
                <img src="{{ asset('assets/front/img/rt004.jpg') }}">
            </div>
            <div class="overlay">
                <a id="play-video" class="video-play-button popup-xs popup-vt" href="#vtours/swimming-pool-mixed/index.html"
                    data-xs-href="vtours-xs/index.html?panorama=images/swimming-pool-mixed.jpg&amp;iframe=true">
                    <span></span>
                </a>
            </div>
            <div class="video-text">
                <!-- <h4>Experience the MOMOINNHotel</h4> -->
            </div>

        </div>
    </div>

    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <h2 class="tagline callout animation-element test2">STAY WITH LUXURY AT MOMOINN </h2>
                    </div>
                </div>
                <div class="offset-md-1 col-md-5">
                    <p class="general tagline callout animation-element test2">
                        MOMOINN offers 356 luxuriously appointed rooms suites with comfort of kitchenette, branded
                        amenities, and
                        balconies with panoramic view of sea and hill.</p>
                    <button class="btn-1">
                        <span class="btn-1"><a href="#rooms-suites.php" class="btn-1">Discover More</a></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

   
    <div>
        <div class="room-list">
            <div class="row">
                <div class="col-md-12">

                    <div class="carousel-wrap">
                        <div class="owl-carousel owl-loaded owl-drag" id="room-list-slider">


                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-2710px, 0px, 0px); transition: all 0s ease 0s; width: 10298px;"
                                    >

                                    @foreach ($roomssuites as $slider)
                                        <div class="owl-item active 123455" style="width: 532px; margin-right: 10px;">
                                            <div class="item"><a href="#superior-sea.php">
                                                    <img src="{{ asset($slider->feature_image) }}"  height="400"/>
                                                    <div class="holder">
                                                        <h4 class="tagline callout animation-element test2">
                                                            {{ $slider->name }}</h4>
                                                        <p> {{ $slider->description }} </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="facility">
        <div class="intro introbot">
            <div class="container">
                <div class="holder-facility">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="tagline callout animation-element test2">INTERNATIONAL STANDARD WITH LOCAL
                                    FLAVOURS</h2>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-5">
                            <p class="general tagline callout animation-element test2">The
                                MOMOINN Cox’s Bazar provides two swimming pools, one exclusively for
                                ladies. The resort boasts of a plethora of indoor &amp; outdoor
                                activities for both adults and kids which include an internationally
                                acclaimed water park, tennis &amp; badminton courts, 3D movie hall,
                                billiards, amphitheater, a luxurious spa and a well-appointed gym. </p>
                            <div class="gap-30"></div>
                            <p class="general tagline callout animation-element test2">The
                                MOMOINN Cox’s Bazar also offers a stunning range of Banqueting &amp;
                                Conferencing options for all your needs. Our selection of restaurants
                                and bars will leave you spoilt for choice with 5 specialty restaurants, a
                                multi-cuisine all day dining with indoor &amp; alfresco seating, 2
                                well-stocked bars &amp; lounge, an ice cream parlor and a juice bar.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- END Facility Primery -->

            <div class="intro-facility">
                <div class="row">
                    <div class="col-md-4">
                        <div class="type1">
                            <a href="#">
                                @if ($roomssuites)
                                    <img style="height: 596px;"
                                        src="{{ !empty($roomssuites[0]->feature_image) ? $roomssuites[0]->feature_image : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                                    <div class="overlay callout animation-element test3 one">
                                        <h2>{{ $roomssuites[0]->name }}</h2>
                                        <p>{{ $roomssuites[0]->description }}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="type1">
                            <a href="#">
                                @if ($facilities)
                                    <img style="height: 596px;"
                                        src="{{ !empty($facilities[0]->feature_image) ? $facilities[0]->feature_image : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />

                                    <div class="overlay callout animation-element test3 two">
                                        <h2>{{ $facilities[0]->name }}</h2>
                                        <p>{{ $facilities[0]->description }}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4" id="third">
                        <div class="type2 gap">
                            <a href="#">
                                @if ($restaurants)
                                    <img style="height: 273px;"
                                        src="{{ !empty($restaurants[0]->feature_image) ? $restaurants[0]->feature_image : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                                    <div class="overlay callout animation-element test3 two">
                                        <h2>{{ $restaurants[0]->name }}</h2>
                                        <p>{{ $restaurants[0]->description }}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                        <div class="type2">
                            <a href="#">
                                @if ($meetingsevents)
                                    <img style="height: 283px;"
                                        src="{{ !empty($meetingsevents[0]->feature_image) ? $meetingsevents[0]->feature_image : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}"
                                        id="dynamic_img">
                                    <div class="overlay callout animation-element test3 two">
                                        <h2>{{ $meetingsevents[0]->name }}</h2>
                                        <p>{{ $meetingsevents[0]->description }}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- END Facility Secondery -->
        </div> <!-- End Intro -->

    </div> <!-- End Facility Section -->





    <div class="container">
        <div class="offer" style="padding-bottom:5px;">
            <div class="row">
            </div>
        </div>


        <div class="offer">
            <div class="row">
            </div>
        </div>
    </div>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
