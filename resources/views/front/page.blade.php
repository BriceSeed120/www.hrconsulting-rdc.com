@extends('layouts.front')

@section('content')
     {{-- @include('layouts.parts.front.banner') --}}
     <div class="page-banner-top">
         @if($pageInfo->attachment)
         <img src="{{ asset($pageInfo->attachment) }}"  />
         @else
         <img src="{{ asset('/uploads/default/banner.jpg') }}"  />
         @endif
       
        <div class="page-name-title">  {{ $pageInfo->name}} </div>
        <div class="banner-overlay"> </div>
     </div>

    

    <div class="container">
        <div class="page-content-description">
            {!! $pageInfo->description !!}
        </div>       
    </div>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
