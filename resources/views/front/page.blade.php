<style>
    body {
        background: #fff;
    }

    #menuToggle span {
        background: #b4a43e !important;
    }

    .book-now,
    .book-now a {
        color: #b4a43e !important;
    }

    .header .social-ul li a {
        color: #b4a43e !important;
        padding-right: 20px;
    }


    /*! CSS Used from: https://www.momoinn.com/css/bootstrap.css */
    @media print {

        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        img {
            page-break-inside: avoid;
        }

        p,
        h2 {
            orphans: 3;
            widows: 3;
        }

        h2 {
            page-break-after: avoid;
        }
    }

    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    h2,
    h4 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
    }

    sup {
        top: -.5em;
    }

    a {
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover {
        color: #00a651;
        text-decoration: underline;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    a {
        -ms-touch-action: manipulation;
        touch-action: manipulation;
    }

    h2,
    h4 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    h2 {
        font-size: 2rem;
    }

    h4 {
        font-size: 1.5rem;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-12,
    .col-md-6,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 576px) {
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /*! CSS Used from: https://www.momoinn.com/css/bootstrap-grid.css */
    *,
    *::before,
    *::after {
        box-sizing: inherit;
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-12,
    .col-md-6,
    .col-md-12 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 576px) {
        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (min-width: 768px) {
        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /*! CSS Used from: https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css */
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style.css */
    * {
        margin: 0;
        padding: 0;
    }

    *:focus {
        outline: none;
        border: 0px solid transparent;
    }

    img {
        max-width: 100%;
    }

    a,
    a:hover {
        text-decoration: none;
    }

    a {
        color: #000;
    }

    li {
        list-style: none;
    }

    li {
        display: inline-block;
    }

    ul,
    li {
        padding: 0px;
        margin: 0px;
    }

    #mobile-ver {
        display: none;
    }

    .common-div .page-body {
        display: block;
        padding: 50px 0px;
    }

    .room-pg .text-holder-right {
        display: block;
        padding-left: 50px;
        max-height: 400px;
        overflow: hidden;
    }

    .room-pg .text-holder-left {
        display: block;
        padding-right: 50px;
        max-height: 400px;
        overflow: hidden;
    }

    .room-pg .left {
        padding: 10px;
        margin-bottom: 10px;
    }

    .room-pg .left p {
        font-size: 14px;
        line-height: 20px;
        text-align: justify;
    }

    .room-pg h2 {
        font-family: 'Playfair Display', serif;
        color: #cf9437;
        padding-bottom: 8px;
        margin-top: -7px;
    }

    .room-pg h2.price {
        background: #cf9437;
        color: #fff;
        padding: 10px 0px 10px 10px;
        font-size: 20px;
        font-style: italic;
    }

    .room-pg h2.price span {
        font-size: 22px;
    }

    .room-pg ul.tours {
        color: #000;
        padding: 11px 15px 12px 0px;
        margin-top: 6px;
    }

    .room-pg ul.tours li {
        margin-right: 15px;
        font-weight: 500;
        color: #444;
    }

    .room-pg ul.tours li a {
        color: #cf9437;
    }

    .room-pg ul.tours li a:hover {
        color: #00a651;
    }

    .room-pg ul.tours li:hover img {
        animation: bounce 2s;
    }

    .room-pg ul.tours li img {
        width: 30px;
        height: 20px;
        padding-right: 10px;
        vertical-align: top;
    }

    .room-pg ul.tours li img:hover {
        animation: bounce 2s;
    }

    .room-pg ul.amenities li {
        display: inline-block;
        width: 49%;
        background: rgba(239, 232, 221, 0.3);
        padding: 3px 20px;
        margin-bottom: 7px;
    }

    .room-pg ul.amenities li span {
        padding-right: 7px;
    }

    .room-pg h4 {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .hoverflash:hover {
        overflow: hidden;
        display: block;
        position: relative;
    }

    .hoverflash:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        width: 0%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.4);
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        overflow: hidden;
    }

    .hoverflash:hover:after {
        width: 100%;
        background-color: rgba(255, 255, 255, 0);
        -webkit-transition: all 1s ease-out;
        -moz-transition: all 1s ease-out;
        -ms-transition: all 1s ease-out;
        -o-transition: all 1s ease-out;
        transition: all 1s ease-out;
        overflow: hidden;
    }

    /*! CSS Used from: https://www.momoinn.com/css/style-responsive.css */
    .image-holder img {
        height: 384px;
        width: 100%;
        object-fit: cover;
    }

    .room-pg h2 {
        font-family: 'Playfair Display', serif;
        color: #cf9437;
        padding-bottom: 8px;
        margin-top: 0px;
    }

    @media (min-width: 980px) and (max-width: 1199px) {
        .room-pg ul.amenities li {
            padding: 3px 3px;
        }

        .room-pg .text-holder-right {
            max-height: 395px;
            padding-top: 0px;
        }
    }

    @media (min-width: 768px) and (max-width: 979px) {
        #mobile-ver {
            display: none;
        }

        #desktop-ver {
            display: block;
        }

        .room-pg .text-holder-right {
            padding-left: 0px;
            max-height: 400px;
            overflow: visible;
            padding-top: 0px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin-left: -15px;
        }

        .room-pg .text-holder-left {
            padding-right: 0px;
            max-height: 440px;
            padding-right: 15px;
            padding-top: 15px;
        }

        .room-pg .text-holder-right {
            max-height: 430px;
        }

        .room-pg .left {
            margin-bottom: 5px;
        }

        .room-pg .text-holder-right h2 {
            font-size: 25px;
        }

        .room-pg .text-holder-left {
            padding-top: 3px;
        }

        .room-pg .text-holder-left h2 {
            font-size: 25px;
        }
    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        #mobile-ver {
            display: block;
        }

        #desktop-ver {
            display: none;
        }

        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 400px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin-left: -15px;
        }

        .room-pg .text-holder-left {
            padding-right: 0px;
            max-height: 380px;
            padding-left: 0px;
            padding-top: 15px;
        }

        .room-pg .left {
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 479px) {
        #mobile-ver {
            display: block;
        }

        #desktop-ver {
            display: none;
        }

        .room-pg h2 {
            font-size: 25px;
        }

        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 500px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg ul.amenities li {
            padding: 3px 0px;
            vertical-align: top;
            font-size: 14px;
        }

        .room-pg h2.price {
            font-size: 17px;
        }

        .room-pg .image-holder.hoverflash {
            margin: 0 auto;
        }

        .room-pg .text-holder-left {
            padding-right: 15px;
            max-height: 460px;
            padding-left: 15px;
            padding-top: 15px;
        }

        .room-pg .left {
            margin-bottom: 20px;
        }
    }

    @media only screen and (min-width: 300px) and (max-width: 370px) {
        .room-pg .text-holder-right {
            padding-left: 15px;
            max-height: 470px;
            overflow: visible;
            padding-top: 20px;
            padding-right: 15px;
        }

        .room-pg .text-holder-left {
            padding-right: 15px;
            max-height: 470px;
            padding-left: 15px;
            padding-top: 15px;
        }

        .room-pg h2.price {
            font-size: 16px;
        }

        .room-pg ul.amenities li {
            font-size: 12px;
        }

        .room-pg ul.tours li {
            margin-right: 10px;
        }

        .room-pg h2 {
            font-size: 20px;
        }
    }

    /*! CSS Used keyframes */
    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }
    }

    @-webkit-keyframes bounce {

        0%,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        40%,
        43% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        40%,
        43%,
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        }

        70% {
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {

        0%,
        20%,
        53%,
        80%,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
        }

        40%,
        43% {
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }

        40%,
        43%,
        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        }

        70% {
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {

        0%,
        20%,
        60%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
        }

        80% {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px)
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

</style>
@extends('layouts.front')
@section('content')
    <div class="page-banner-top">
        @if ($pageInfo->attachment)
          <img src="{{ asset('/uploads/default/banner.jpg') }}" />
        @else
            <img src="{{ asset('/uploads/default/banner.jpg') }}" />
        @endif

        <div class="page-name-title"> {{ $pageInfo->name }} </div>
        <div class="banner-overlay"> </div>
    </div>
    <div class="container room-pg">
        <div class="page-body">
            <!-- Room Start -->
            @if ($contentData)
                @foreach ($contentData as $key => $item)
                    @if ($key % 2 == 0)
                        <div class="left">
                            <div class="row wow fadeInUp animated" data-wow-delay=".2s" data-wow-duration="1s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="col-sm-12 col-md-6">
                                    <div class="image-holder hoverflash">
                                        <img src="{{ asset($item->feature_image) }}" />
                                        <h2 class="price">Room Rate :<span> {{ $item->rate_in_usd }} </span>/ BDT
                                            <span>{{ $item->rate_in_bdt }}</span></h2>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 text-holder-right">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>{{ $item->name }} </h2>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <h4> {{ $item->property_label }}: </h4>
                                    <ul class="amenities">
                                        @if ($item->property_list)
                                            <?php $list = explode(',', $item->property_list); ?>
                                            @for ($i = 0; $i < sizeof($list); $i++)
                                                <li><span>✓</span> {{ $list[$i] }} </li>
                                            @endfor
                                        @endif
                                    </ul>
                                    <ul class="tours">
                                        <li class="pg"><a href="#gallery-1" class="ph-gallery">
                                                <img src="{{ asset('/assets/images/camera.png') }}" />Photo Gallery</a></li>
                                        <li class="vt"><a href="vtours/super-deluxe/index.html?iframe=true"
                                                class="magnific-vt ph-gallery"
                                                data-xs-href="vtours-xs/index.html?panorama=images/super-deluxe.jpg&amp;iframe=true"
                                                data-rel="vtours">
                                                <img src="{{ asset('/assets/images/360video.png') }}" />Virtual Tour</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Room End -->

                        <!-- Room Start -->
                        <div class="left wow fadeInUp animated" data-wow-delay=".2s" data-wow-duration="1s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col-sm-12 col-md-6" id="mobile-ver">
                                    <div class="image-holder hoverflash">
                                        <img src="{{ asset($item->feature_image) }}" />
                                        <h2 class="price">Room Rate :<span> {{ $item->rate_in_usd }} </span>/ BDT
                                            <span>{{ $item->rate_in_bdt }}</span></h2>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 text-holder-left">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>{{ $item->name }} </h2>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <h4> {{ $item->property_label }}: </h4>
                                    <ul class="amenities">
                                        @if ($item->property_list)
                                            <?php $list = explode(',', $item->property_list); ?>
                                            @for ($i = 0; $i < sizeof($list); $i++)
                                                <li><span>✓</span> {{ $list[$i] }} </li>
                                            @endfor
                                        @endif
                                    </ul>
                                    <ul class="tours">
                                        <li class="pg"><a href="#gallery-2" class="ph-gallery"> <img
                                                    src="{{ asset('/assets/images/camera.png') }}" />Photo Gallery</a></li>
                                        <li class="vt"><a href="vtours/deluxe-couple/index.html?iframe=true"
                                                class="magnific-vt ph-gallery"
                                                data-xs-href="vtours-xs/index.html?panorama=images/deluxe-couple.jpg&amp;iframe=true"
                                                data-rel="vtours"> <img
                                                    src="{{ asset('/assets/images/360video.png') }}" />Virtual Tour</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-12 col-md-6" id="desktop-ver">
                                    <div class="image-holder hoverflash">
                                        <img src="{{ asset($item->feature_image) }}" />
                                        <h2 class="price">Room Rate :<span> {{ $item->rate_in_usd }} </span>/ BDT
                                            <span>{{ $item->rate_in_bdt }}</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
            <!-- Room End -->

            <div id="gallery-1" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>
            <div id="gallery-2" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>
            <div id="gallery-3" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>
            <div id="gallery-4" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>
            <div id="gallery-5" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>
            <div id="gallery-6" class="hidden">
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
                <a href="{{ asset('/uploads/default/banner.jpg') }}"></a>
            </div>


        </div>
    </div>


@endsection

@section('head')

@endsection

@section('foot')

@endsection
