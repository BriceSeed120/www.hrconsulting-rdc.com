<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" async="" src="{{ asset('assets/front/js/recaptcha__en.js') }}"
        crossorigin="anonymous" integrity="sha384-EauiKN7dy30bq/wDo7lcvebLQr7wwQPtEV6A1G43RAWnhPwxWZFCCTOT/hE+ffe3">
    </script>
    <script async="" src="{{ asset('assets/front/js/gtm.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MOMOINN</title>
    <!-- FontAwesome Style -->
    <link rel="icon" type="image/png" href="#">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.css') }}">
    <!-- magnific Style Sheets -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <!-- Filterable Gallery Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/filterable.css') }}">
    <!-- Mobile Responsive Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/styles.css') }}" media="all">
    {{-- <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script> --}}
    {{-- <script type="text/javascript"
    src="{{ asset('assets/front/js/jquery.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/front/js/bootstrap.js') }}"></script>
    <style>
    </style>
</head>

<body class="" data-new-gr-c-s-check-loaded="8.867.0">
    <div class="header">
        <div class="menu">
            <div class="row">
                <div class="col-md-4">
                    <nav role="navigation">
                        <div id="menuToggle" class="">
                            <input type="checkbox">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </nav>
                    <!-- Menu Ends -->
                    <div class="book-now"><a href="#">Reservation</a></div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="logo-sticky" id="logo-sticky" style="visibility: hidden">
                        <a href="/">
                            <img src={{ asset('/assets/images/logo.png') }} alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4  d-sm-block top-menu" id="topMenu">
                    <ul class="">
                        <?php $count = 0; ?>
                        @foreach ($globalTopMenu as $menu)
                            <?php if ($count == 4) {
                            break;
                            } ?>
                            <li><a
                                    href="{{ route('frontpage', [$menu->id, $menu->category]) }}">{{ $menu->name }}</a>
                            </li>
                            <?php $count++; ?>
                        @endforeach
                    </ul>

                </div>

            </div>

        </div>

    </div>
    <style>
        .page-logo-center {
            padding-top: 30px;
            padding-bottom: 60px;
            position: absolute;
            z-index: 9 !important;
            width: 124px;
            top: 0px;
            left: calc(50% - 62px);
        }

        @media only screen and (max-width: 767px) {
            .page-logo-center {
                top: -15px;
                left: calc(50% - 62px);
            }
        }

    </style>
    <div class="page-logo-center" id="page-center-logo">
        <a href="/">
            <img src={{ asset('/assets/images/logo.png') }} alt="" />
        </a>
    </div>

    <!-- Menu Starts -->

    <ul class="menu-ul">


        <div class="menu-button  active" tabindex="-1" style="opacity: 1; pointer-events: auto;">

            <div class="menu-button__bar menu-button__bar--1"></div>

            <div class="menu-button__bar menu-button__bar--2"></div>

            <div class="menu-button__bar menu-button__bar--3"></div>

            <div class="menu-button__bar menu-button__bar--4"><span class="menu_title">Menu</span></div>

        </div>


        <div class="menu-list">

            <ul class="callout animation-element test2 two in-view">
                <li style="width: 100%"><a href="/">Home</a></li>
                <li style="width: 100%"><a href="{{ route('booking') }}">Booking</a></li>
                {{-- <?php $count = 0; ?>
            @foreach ($globalMenu as $menu)
                <?php if ($count == 3) {
                    break;
                } ?>
                <li style="width: 100%"><a href="{{ route("frontpage", [$menu->id, $menu->category]) }}">{{ $menu->name}}</a></li>
                <?php $count++; ?>
            @endforeach --}}

                @for ($i = 0; $i < 3; $i++)
                    @if (!empty($globalMenu[$i])) <li style="width:
                    100%"><a
                    href="{{ route('frontpage', [$globalMenu[$i]->id, $globalMenu[$i]->category]) }}">{{ $globalMenu[$i]->name }}</a></li> @endif
                @endfor

            </ul>
            <ul class="callout animation-element test2 four in-view">
                @for ($i = 3; $i < 7; $i++)
                    @if (!empty($globalMenu[$i])) <li style="width:
                    100%"><a
                    href="{{ route('frontpage', [$globalMenu[$i]->id, $globalMenu[$i]->category]) }}">{{ $globalMenu[$i]->name }}</a></li> @endif
                @endfor

                <li style="width: 100%"><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <ul class="callout animation-element test2 four menucontact in-view">

                <p>

                    <span>Momo Inn</span><br>

                    Nawdapara, Rangpur Road, Bogura, Bangladesh,<br>sales@momoinn.com, reservation@momoinn.com<br>

                    <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88 0516 6402
                    &nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+88 017 55 66 99 00<br>

                </p>

    

                <p>

                    <span>Dhaka Office:</span><br>
                    Priyo Prangon Tower (3rd Floor),<br>
                    H # 19, R # 17, Kamal Ataturk Avenue, Banani, Dhaka 1213<br>

                    553, A S Tower, 7th Floor, Probortok Circle<br>

                    <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+880 51 62504, +880 51 62505

                </p>

            </ul>

        </div>


    </ul>

    <!-- Menu Ends -->
