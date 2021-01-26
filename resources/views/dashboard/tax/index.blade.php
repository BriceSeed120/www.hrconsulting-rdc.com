@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     
        <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            @if(!count($taxs))
            <a href="{{ route('taxs.create') }}" type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus"></span>
                Add new tax
            </a>
            @endif
        </div>
    </div>
 


    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tax(%)</th>
                    <th>Vat(%)</th>                    
                    <th><i data-feather="tool"></i></th>
                </tr>
            </thead>
            <tbody>
                @if($taxs)
                @foreach ($taxs as $k => $tax)
                    <tr>
                        <td>{{ $k + 1 }}</td>
                      <td> {{ $tax->tax}}</td>
                      <td> {{ $tax->vat}}</td>
                    <td>  <a class="btn btn-secondary" style="float: left"
                        href="{{ route('taxs.edit', $tax->id) }}">Edit</a> </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
       
    </main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
