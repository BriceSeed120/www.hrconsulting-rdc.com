
<!-- Image Height to fix alignment Starts -->
<script>
    // $(document).ready(function() {
    // $().ready(function() {
    //     var height = $('.facility #third').outerHeight();
    //     $('.facility .type1 img').css('height', height-6);
    // });

    $(window).on("scroll", function (e) {
        var scroll = $(window).scrollTop();
        var width = $(window).width();
        if (scroll > 100) {
            if (width > 767) {
                // var height = $('.facility #third').innerHeight();
                // alert(width);
                var height = $('#dynamic_img').outerHeight();
                $('.facility .type1 img').css('height', height * 2 + 40);
            }
        }
    });
</script>
<!-- Image Height to fix alignment Ends -->

<div class="footer inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="footer-logo">
                    <img src="images/logo-footer.jpg')}}">
                </div> -->
                <ul class="footer-ul">
                    <!-- <li><button class="btn-1"><span class="btn-1"><a href="./" class="btn-1">Home</a></span></button></li> -->
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}" class="btn-1">Rooms &amp; Suites</a></span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}" class="btn-1">Restaurants &amp; Bar</a></span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}" class="btn-1">Meetings &amp; Events</a></span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}"
                                    class="btn-1">Wellness</a></span></button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}" class="btn-1">Recreation</a></span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}" class="btn-1">Special Offers</a></span>
                        </button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="https://reservations.travelclick.com/112438?languageid=1" target="_blank"
                                    class="btn-1">Booking</a></span></button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}"
                                    class="btn-1">Gallery</a></span></button>
                    </li>
                    <li>
                        <button class="btn-1"><span class="btn-1"><a
                                    href="{{url('/')}}"
                                    class="btn-1">Contact Us</a></span></button>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-8">
                        <ul class="address">
                            <li><p>Nawdapara, Rangpur Road, Bogura, Bangladesh.</p></li>
                            <li><p>sales@momoinn.com, reservation@momoinn.com</p></li>
                            <li><p>+88 0516 6402 +88 017 55 66 99 00</p></li>
                        </ul>
                        <p class="copyright">©2020. Momo Inn.&nbsp;&nbsp;All right reserved.&nbsp;&nbsp;&nbsp;<span>Site by <a href="{{url('/')}}" target="_blank"> Momo Inn</a></span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <ul class="apps">
                            <li class="g-play">
                                <a href="{{url('/')}}"
                                   target="_blank"><img src="{{ asset('assets/front/img/play.png')}}"></a>
                            </li>
                            <li>
                                <a href="{{url('/')}}"
                                   target="_blank"><img src="{{ asset('assets/front/img/iphone.png')}}"></a>
                            </li>
                        </ul>
                    </div>                  

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Animated Text Starts -->
<script type="text/javascript" src="{{ asset('assets/front/js/jquery_003.js')}}"></script>
<script>
    $(document).ready(function () {
        // ps: disable on small devices!
        var $animationElements = $('.animation-element');
        var $window = $(window);

        // ps: Let's FIRST disable triggering on small devices!
        var isMobile = window.matchMedia("only screen and (max-width: 768px)");
        if (isMobile.matches) {
            $animationElements.removeClass('animation-element');
        }

        function checkIfInView() {

            var windowHeight = $window.height();
            var windowTopPosition = $window.scrollTop();
            var windowBottomPosition = (windowTopPosition + windowHeight);

            $.each($animationElements, function () {
                var $element = $(this);
                var elementHeight = $element.outerHeight();
                var elementTopPosition = $element.offset().top;
                var elementBottomPosition = (elementTopPosition + elementHeight);

                //check to see if this current container is within viewport
                if ((elementBottomPosition >= windowTopPosition) &&
                    (elementTopPosition <= windowBottomPosition)) {
                    $element.addClass('in-view');
                } else {
                    $element.removeClass('in-view');
                }
            });
        }

        $window.on('scroll resize', checkIfInView);
        $window.trigger('scroll');


        /* @end viewport trigger script  */

    });
</script>
<!-- Animated Text Ends -->

<!-- gallary new -->


  <!-- Magnific Popup core JS file -->
  <script src="{{asset('assets/front/js/jquery.magnific-popup.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {

  $('a.ph-gallery').on('click', function(event) {
    event.preventDefault();
    
    var gallery = $(this).attr('href');
    
    $(gallery).magnificPopup({
      delegate: 'a',
      type:'image',
      gallery: {
        enabled: true
      }
    }).magnificPopup('open');
  });
  
  });
  </script>
  <script type="text/javascript">
    $('.magnific').magnificPopup({
      type:'image',
      removalDelay: 300,
      mainClass: 'mfp-fade'
    });
      
    $('.magnific-vt, .magnific-youtube').magnificPopup({
      disableOn: 100,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 300,
      preloader: true,
      fixedContentPos: false
    });
  </script>

<!-- gallery ended --->


<script type="text/javascript"
        src="{{ asset('assets/front/js/jquery.js')}}"></script>

<!---------------------magnific popup--------------------->
<script src="{{ asset('assets/front/js/jquery_005.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.all-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    // return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                    return item.el.attr('title');
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
                    return element.find('img');
                }
            }

        });
    });

    var groups = {};
    $('.ph-gallery').each(function () {
        var id = parseInt($(this).attr('data-group'), 10);

        if (!groups[id]) {
            groups[id] = [];
        }

        groups[id].push(this);
    });


    $.each(groups, function () {

        $(this).magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            gallery: {enabled: true}
        })

    });

    //iframe popup
    $(document).ready(function () {
        $('.popup-vt').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        $('.popup-xs').magnificPopup({
            enableOn: 699,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });
    /*
    -----------------------------------------------------
    -----------------------------------------------------
     Modify link href | for Without flash virtual tours
    -----------------------------------------------------
    -----------------------------------------------------
    */
    $(document).ready(function () {
        $(window).resize(function () {
            if ($(window).width() <= 1024) {
                $('a[data-xs-href]').each(function () {
                    $(this).attr('href', $(this).attr('data-xs-href'));
                });
            }
        }).resize(); // This will simulate a resize to trigger the initial run.
    });
</script>


<!-- main menu -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#menuToggle").click(function () {
            $("body").addClass("blur-body")
            $(".menu-ul").show()
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu-button.active").click(function () {
            $("body").removeClass("blur-body")
            $(".menu-ul").hide()
        });
    });
</script>

<!-- Flexslider Starts -->
<script type="text/javascript"
        src="{{ asset('assets/front/js/jquery_002.js')}}"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "fade",
            animationLoop: true,
            controlNav: false,
            start: function (slider) {
                slider.removeClass('loading');
            }
        });

        $('.pageslider').flexslider({
            animation: "fade",
            animationLoop: true,
            controlNav: true,
            start: function (slider) {
                slider.removeClass('loading');
            }
        });
    });
</script>
<script type="text/javascript" src="{{ asset('assets/front/js/owl.js')}}"></script>
<script>
    jQuery( document ).ready(function( $ ) {
        $('#room-list').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        autoplay: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
});
</script>
<!-- Room Slider Home Page Owl Carousel Ends -->

<!-- Facility Slider Home Page Owl Carousel Starts -->
<script>
    $('#facility-owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [
            "<img class='left' src='images/icons/left.jpg'>",
            "<img class='right' src='images/icons/right.jpg'>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
<!-- Facility Slider Home Page Owl Carousel Ends -->

<script>
    $(window).on("load resize scroll", function (e) {
        var scroll = $(window).scrollTop();
        if (scroll > 80) {
            $(".menu").fadeIn("slow");
            $(".menu").addClass('sticky-menu');
            $(".logotoppage").addClass('showpl');
            $(".book-now").addClass('sticky');
            $("#menuToggle").addClass('sticky-menu-button');
            $("#logo-sticky").css('visibility', 'visible');
        } else {
            $(".menu").removeClass('sticky-menu');
            $(".logotoppage").removeClass('showpl');
            $(".book-now").removeClass('sticky');
            $("#menuToggle").removeClass('sticky-menu-button');
            $("#logo-sticky").css('visibility', 'hidden');
            // $('.menu').css('display', 'none');
        }

    });
</script>
<!-- https://codepen.io/nxworld/pen/OyRrGy -->

<!-- Scroll Down Starts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min')}}"></script> -->
<script>
    $(document).ready(function () {
        $(function () {
            $('.down').click(function () {
                // alert('a');
                $('html, body').animate({scrollTop: $('section.ok').offset().top}, 'slow');
                return false;
            });
        });
    });
</script>
<script type="text/javascript" src="{{ asset('assets/front/js/jquery_004.js')}}"></script>
<script type="text/javascript">
    $(function () {
        var filterGallery = {
            init: function () {
                // MixItUp plugin
                $('#inrbody').mixItUp({
                    selectors: {
                        target: '.ph-box',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.rooms'
                    }
                });

            }
        };
        // Run the show!
        filterGallery.init();
    });
    $(function () {
        var filterVT = {
            init: function () {
                // MixItUp plugin
                $('#vtfilter').mixItUp({
                    selectors: {
                        target: '.dvtfltr',
                        filter: '.filter'
                    },
                    load: {
                        filter: '.rooms'
                    }
                });

            }
        };
        filterVT.init();
    });
</script>
<script src="{{ asset('assets/front/js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
  $(document).on('ready', function() {     
    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
    $(".lazy").slick({
      lazyLoad: 'ondemand', // ondemand progressive anticipated
      infinite: true
    });
  });
</script>



{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> --}}
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" />

<script>
$( document ).ready(function() {
    $('input[name="daterangepicker"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    var today = new Date();
    var myToday = new Date(today.getFullYear(), today.getMonth(), today.getDate(), 0, 0, 0);
    
    if( start >= new Date(myToday) && end > new Date()){
        $("#viewSelectedDate").html(start.format('YYYY-MM-DD') + " &nbsp; to " + end.format('YYYY-MM-DD'));
        $("#selectedStartDate").val(start.format('YYYY-MM-DD'));
	    $("#selectedEndDate").val(end.format('YYYY-MM-DD'));
    }

  });
});
</script>





</body>
</html>
