<div class="banner-holder">
    <div class="row">
        <div class="col-md-12">
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($banners as $key => $banner)
                        <li style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"
                            class="flex-active-slide">
                            <img src="{{ asset($banner->attachment) }}" />
                            draggable="false">
                            <div class="meta">
                                <h1 class="tagline callout animation-element test4 in-view">
                                    {{($banner->title) }}
                                </h1>
                                <span class="block"><span></span></span>
                                <h2 class="tagline callout animation-element test3 in-view">
                                    {{ ($banner->description) }} </h2>
                            </div>
                            <div class="number"> {{ $key++ <= 9 ? '0' . $key : $key }}</div>
                        </li>
                    @endforeach
                </ul>
                <div class="total-slide"><span>/</span>
                    {{ count($banners) <= 9 ? '0' . count($banners) : count($banners) }} </div>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev" href="#"></a></li>
                    <li class="flex-nav-next"><a class="flex-next" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="down"><a href="#"></a>
    <img src="{{ asset('assets/front/img/down.jpg') }}" alt="">
</div>
<p class="scroll-down">Scroll to discover more</p>


<section class="ok"></section>
