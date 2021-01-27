@extends('layouts.front')

@section('content')
    @include('layouts.parts.front.banner')
   
@if($weatherData && $weatherData->daily)
 <div class="weather onlyDesktop">
    @foreach($weatherData->daily as $key => $data)
    <?php if($key == 7) break; ?>
    <div class="day-weather">
        <div class="day-name"> {{date("l",  date($data->dt))}} </div>
        <div class="sun rotating"> </div>
        <div class="temp">
            <div class="min-temp"> {{ $data->temp->min }}°C </div>
            <div class="max-temp"> {{ $data->temp->max}}°C </div>
        </div>      
    </div>
    @endforeach
</div> 

<section class="weather-slider slider only-mobile">
    @foreach($weatherData->daily as $key => $data)
    <div class="weather">       
        <?php if($key == 7) break; ?>
        <div class="day-weather">
            <div class="day-name"> {{date("l",  date($data->dt))}} </div>
            <div class="sun rotating"> </div>
            <div class="temp">
                <div class="min-temp"> {{ $data->temp->min }}°C </div>
                <div class="max-temp"> {{ $data->temp->max}}°C </div>
            </div>      
        </div>       
    </div>
    @endforeach
</section>
@endif

    <div class="container">
        <div class="intro">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">
                        <h1 class="tagline tagline callout animation-element test2"># Grant Welcome</h1>
                        <h2 class="tagline callout animation-element test2">
                            @if($welcomeArticle)
                            {{ $welcomeArticle->title}} 
                            @endif
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="general tagline callout animation-element test2">
                        @if($welcomeArticle)
                        {{ $welcomeArticle->description}} 
                        @endif
                     </p>
                    <div class="gap-30"></div>
                    
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
                        <h2 class="tagline callout animation-element test2">
                             @if($roomArticle)
                            {{ $roomArticle->title}} 
                            @endif
                        </h2>
                    </div>
                </div>
                <div class="offset-md-1 col-md-5">
                    <p class="general tagline callout animation-element test2">
                        @if($roomArticle)
                        {{ $roomArticle->description}} 
                        @endif
                        </p>
                    {{-- <button class="btn-1">
                        <span class="btn-1"><a href="#rooms-suites.php" class="btn-1">Discover More</a></span>
                    </button> --}}
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}">
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        .slider {
            width: 85%;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }

    </style>

    <section class="regular slider room-list onlyDesktop">
        @foreach ($roomssuites as $slider)
            <div class="owl-item active" style="width: 532px; margin-right: 10px;">
                <div class="item">
                    <a href="javascript:void(0)">
                        <img src="{{ asset($slider->feature_image) }}" height="320" />
                        <div class="holder">
                            <h4 class="tagline callout animation-element test2">
                                {{ $slider->name }}
                            </h4>
                            <p> {{ $slider->description }} </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <section class="roomlist-mobile-slider slider room-list only-mobile">
        @foreach ($roomssuites as $slider)
            <div class="owl-item active" style="width: 532px; margin-right: 10px;">
                <div class="item">
                    <a href="javascript:void(0)">
                        <img src="{{ asset($slider->feature_image) }}" height="320" />
                        <div class="holder">
                            <h4 class="tagline callout animation-element test2">
                                {{ $slider->name }}
                            </h4>
                            <p> {{ $slider->description }} </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <div class="facility">
        <div class="intro introbot">
            <div class="container">
                <div class="holder-facility">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="tagline callout animation-element test2">
                                    @if($mixArticle)
                                    {{ $mixArticle->title}} 
                                    @endif</h2>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-5">
                            <p class="general tagline callout animation-element test2">
                                @if($mixArticle)
                                {{ $mixArticle->description}} 
                                @endif
                            </p>
                            <div class="gap-30"></div>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- END Facility Primery -->

           
        </div> <!-- End Intro -->

    </div> <!-- End Facility Section -->



<div class="container">
    <div class="viewsample">
        <div class="single-view">
            <a  href="{{ route("frontpage", [1,1]) }}">
                @if ($roomssuites && !empty($roomssuites[0]))
                    <img 
                        src="{{ !empty($roomssuites[0]->feature_image) ? asset($roomssuites[0]->feature_image) : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                        <div class="text-pos callout animation-element test3 one">
                        <h2>{{ $roomssuites[0]->name }}</h2>
                        <p>{{ $roomssuites[0]->description }} </p>
                    </div>
                @endif
            </a>        
        </div>
        <div class="single-view">
            <a  href="{{ route("frontpage", [4,2]) }}">
                @if ($facilities && !empty($facilities[0]))
                    <img 
                        src="{{ !empty($facilities[0]->feature_image) ? asset($facilities[0]->feature_image) : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                        <div class="text-pos callout animation-element test3 one">
                        <h2>{{ $facilities[0]->name }}</h2>
                        <p>{{ $facilities[0]->description }} </p>
                    </div>
                @endif
            </a>        
        </div>
        <div class="rightview">
            <div class="double-view">
                <a  href="{{ route("frontpage", [2,3]) }}">
                    @if ($restaurants && !empty($restaurants[0]))
                        <img 
                            src="{{ !empty($facilities[0]->feature_image) ? asset($restaurants[0]->feature_image) : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                            <div class="text-pos callout animation-element test3 one">
                            <h2>{{ $restaurants[0]->name }}</h2>
                            <p>{{ $restaurants[0]->description }} </p>
                        </div>
                    @endif
                </a>        
            </div>
            <div class="double-view">
                <a  href="{{ route("frontpage", [3,4]) }}">
                    @if ($meetingsevents && !empty($meetingsevents[0]))
                        <img 
                            src="{{ !empty($meetingsevents[0]->feature_image) ? asset($meetingsevents[0]->feature_image) : asset('uploads/default/room-meeting-facilities-restaurants.jpg') }}" />
                            <div class="text-pos callout animation-element test3 one">
                            <h2>{{ $meetingsevents[0]->name }}</h2>
                            <p>{{ $meetingsevents[0]->description }} </p>
                        </div>
                    @endif
                </a>        
            </div>
        </div>
    </div>
</div>


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
