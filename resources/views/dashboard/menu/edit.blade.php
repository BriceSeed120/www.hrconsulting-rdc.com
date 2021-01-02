@extends('layouts.backend')
@section('content')
    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
            <form method="POST" action="{{ route('menus.update', $menu->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-4">
                            <label for="title">Menu Name *</label>
                            <input type="text" required name="name" class="form-control" placeholder="Menu Name"
                                value="{{ old('name', $menu->name) }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Banner Image</label>
                            <input type="file" name="banner" class="form-control">
                            <div style="height: 120px; width: 200px; margin-top: 15px">
                                <img  height="120" width="200" src="{{ asset($menu->attachment) }}"  />
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Meta title</label>
                            <input type="text" name="meta_title" class="form-control" placeholder="Meta title"
                                value="{{ old('meta_title', $menu->meta_title) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-4">
                            <label for="title">Menu Order </label>
                            <input  type="number" name="menu_order" class="form-control" placeholder="Menu Order"
                                value="{{ old('menu_order', $menu->menu_order) }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" placeholder="Meta Keywords"
                                value="{{ old('meta_keywords',  $menu->meta_keywords) }}">
                        </div>
                        <div class="form-group mb-4">
                            <label for="title">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control" placeholder="Meta description"
                                value="{{ old('meta_description',  $menu->meta_description) }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="title">Description *</label>
                            <textarea required type="text" id="summary-ckeditor" name="description" rows="8"
                                placeholder="Description" class="form-control">{{ old('description',  $menu->description) }}</textarea>

                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Update Menu</button>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor', {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
   </main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
