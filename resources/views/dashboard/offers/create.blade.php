@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('offers.index') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="content">
            <form method="POST" action="{{ route('offers.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-4">
                            <label for="title">Name * </label>
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Property Label Name</label>
                            <input type="text" name="property_label" class="form-control" placeholder="Property Label Name"
                                value="{{ old('property_label') }}">
                        </div>

                        <div class="form-group">
                            <label for="title">Feature Image</label>
                            <input type="file" name="feature_image" class="form-control form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="title">Description * </label>
                            <textarea type="text" name="description" rows="8" placeholder="Description"
                                class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Create</button>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group mb-4">
                            <label for="title">Rate in BTD(৳) * </label>
                            <input type="text" name="rate_in_bdt" class="form-control" placeholder="Rate in BDT(৳)"
                                value="{{ old('rate_in_bdt') }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Rate in USD($)</label>
                            <input type="text" name="rate_in_usd" class="form-control" placeholder="Rate in USD($)"
                                value="{{ old('rate_in_usd') }}">
                        </div>


                        <div class="form-group mb-4">
                            <label for="title">Gallary</label>
                            <div class="field_wrapper">
                                <div class="add-more-area">
                                    <input type="file" name="gallery[]" value="" />
                                    <a href="javascript:void(0);" class="add_button" title="Add field"> Add </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="title">Property List</label>
                            <div class="propperty_wrapper">
                                <div class="add-more-area">
                                    <input type="text" class="form-control" name="property_list[]"
                                        placeholder="Property list" value="" />
                                    <a href="javascript:void(0);" class="add_property_button" title="Add field"> Add </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </main>

    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 20;
            var addButton = $('.add_button');
            var wrapper = $('.field_wrapper');
            var fieldHTML =
                '<div class="add-more-area"><input type="file" name="gallery[]" value=""/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html 
            var x = 1;
            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
        $(document).ready(function() {
            var maxField = 20;
            var addButton = $('.add_property_button');
            var wrapper = $('.propperty_wrapper');
            var fieldHTML =
                '<div class="add-more-area"><input  class="form-control" type="text"  placeholder="Property list" name="property_list[]" value=""/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html 
            var x = 1;
            $(addButton).click(function() {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });

    </script>

@endsection

@section('head')

@endsection

@section('foot')

@endsection
