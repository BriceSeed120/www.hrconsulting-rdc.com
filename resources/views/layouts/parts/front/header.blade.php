<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" async="" src="{{ asset('assets/front/js/recaptcha__en.js') }}" crossorigin="anonymous" integrity="sha384-EauiKN7dy30bq/wDo7lcvebLQr7wwQPtEV6A1G43RAWnhPwxWZFCCTOT/hE+ffe3"></script>
    <script async="" src="{{ asset('assets/front/js/gtm.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MOMOINN</title>
    <!-- FontAwesome Style -->
    <link rel="icon" type="image/png" href="#">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.css')}}">
    <!-- magnific Style Sheets -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css')}}">
    <!-- Filterable Gallery Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/filterable.css')}}">
    <!-- Mobile Responsive Style -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/style-responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/styles.css')}}" media="all">
    <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script>
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
                        <img src={{ asset("/assets/images/logo.png")}} alt="" />
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 d-none d-sm-block">

                <ul class="social-ul  ">

                    <li><a href="tel:" data-rel="external"><i  class="fa fa-phone"></i></a></li>

                    <li><a href="mailto:" data-rel="external"><i class="fa fa-envelope"></i></a></li>

                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>

                    <li><a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>

                    <li><a href=""><i class="fa fa-twitter"></i></a></li>

                </ul>

            </div>

        </div>

    </div>

</div>
<style>
.page-logo-center{   
    padding-top: 35px;
    padding-bottom: 60px;
    position: absolute;
    z-index: 9 !important;
    width: 124px;
    top: 20px;
    left: calc(50% - 62px);
}
</style>
<div class="page-logo-center" id="page-center-logo">
    <a href="/">
        <img src={{ asset("/assets/images/logo.png")}} alt="" />
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
           <?php $count = 0; ?>
            @foreach ($globalMenu as $menu)
                <?php if($count == 5) break; ?>
                <li style="width: 100%"><a href="{{ route("frontpage", [$menu->id, $menu->category]) }}">{{ $menu->name}}</a></li>
                <?php $count++; ?>
            @endforeach

        </ul>
        <ul class="callout animation-element test2 four in-view">
            @for($i = 5; $i < 10; $i++)
                @if(!empty($globalMenu[$i]))
                 <li style="width: 100%"><a  href="{{ route("frontpage", [$globalMenu[$i]->id, $globalMenu[$i]->category]) }}">{{ $globalMenu[$i]->name}}</a></li>
                @endif           
            @endfor
        </ul>
        <ul class="callout animation-element test2 four menucontact in-view">

            <p>

                <span>Momo Inn</span><br>

                Nawdapara, Rangpur Road, Bogura, Bangladesh,<br>sales@momoinn.com, reservation@momoinn.com<br>

                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88 0516 6402
                &nbsp;<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+88 017 55 66 99 00<br>              

            </p>

            <p>

                <span>Corporate Office:</span><br>

                Nawdapara, Rangpur Road,<br>

                Bogura, Bangladesh.<br>

                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88 0516 6402<br>
                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88 017 55 66 99 00 <br>

                <i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;+88 0516 6402

            </p>

            <p>

                <span>Dhaka Office:</span><br>

                553, A S Tower, 7th Floor, Probortok Circle<br>

                Mirpur-10, Dhaka, Bangladesh.<br>

                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+88 0516 6402

            </p>

        </ul>

    </div>


</ul>

<!-- Menu Ends -->
