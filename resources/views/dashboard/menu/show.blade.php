@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Menus</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('menus.index') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    @if ($details)
                        <tr>
                            <th width="20%"> Menu Name </th>
                            <td> {{ $details->name }}</td>
                        </tr>
                        <tr>
                            <th width="20%"> Meta Title </th>
                            <td> {{ $details->meta_title }}</td>
                        </tr>
                        <tr>
                            <th width="20%"> Meta Description </th>
                            <td> {{ $details->meta_description }}</td>
                        </tr>
                        <tr>
                            <th width="20%"> Meta Keywords </th>
                            <td> {{ $details->meta_keywords }}</td>
                        </tr>
                        <tr>
                            <th width="20%"> Description </th>
                            <td> {!! $details->description !!}</td>
                        </tr>

                    @else
                        <h4>Menu does not exists!. </h4>
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
