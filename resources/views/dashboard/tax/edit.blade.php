@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('taxs.index') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="content">
            <form method="POST" action="{{ route('taxs.update',$taxs->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-4">
                            <label for="title">Tax(%) * </label>
                            <input type="number" required  name="tax" class="form-control" placeholder="5"
                                value="{{ old('tax', $taxs->tax) }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Vat(%) *</label>
                            <input type="number" required name="vat" class="form-control" placeholder="10"
                                value="{{ old('vat', $taxs->vat) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Update</button>
                        </div>
                    </div>
                    
            </form>
        </div>
    </main>


@endsection

@section('head')

@endsection

@section('foot')

@endsection
