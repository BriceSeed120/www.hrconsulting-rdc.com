@extends('layouts.backend')
<style>
    .label-value {
        padding-top: 10px;
        color: black;
    }

</style>
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Our Customers</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('facilities.index') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-6">

                    <table class="table table-bordered table-hovered" style="">
                        <tr>
                            <th> Name </th>
                            <th> Value</th>
                        </tr>
                        <tr>
                            <td> Name </td>
                            <td> {{ $facilities->name }}</td>
                        </tr>
                        <tr>
                            <td> Property Label Name </td>
                            <td> {{ $facilities->property_label }}</td>
                        </tr>
                        <tr>
                            <td> Rate in BTD(৳) </td>
                            <td> {{ $facilities->rate_in_bdt }}</td>
                        </tr>
                        <tr>
                            <td> Rate in USD($) </td>
                            <td> {{ $facilities->rate_in_usd }}</td>
                        </tr>

                        <tr>
                            <td> Feature Image </td>
                            <td> <img height="160" width="260" src="{{ asset($facilities->feature_image) }}" /></td>
                        </tr>
                        <tr>
                            <td> Gallary Image </td>
                            <td>
                                @if ($facilities->gallery)
                                    <?php $list = explode(',', $facilities->gallery); ?>
                                    @for ($i = 0; $i < sizeof($list); $i++)
                                        <div class="add-more-area">
                                            <img height="160" width="260" src={{ asset($list[$i]) }} alt="" />
                                        </div>
                                    @endfor
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td> Property List </td>
                            <td>{{ $facilities->property_list ? $facilities->property_list : '' }} </td>
                        </tr>
                        <tr>
                            <td> Description </td>
                            <td> {{ $facilities->description }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </main>

@endsection

@section('head')

@endsection

@section('foot')

@endsection
