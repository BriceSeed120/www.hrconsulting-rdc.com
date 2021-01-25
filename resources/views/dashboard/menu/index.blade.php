@extends('layouts.backend')
<style>
    .top-menu-bg{
      color: green !important;
      text-decoration: underline;
      font-weight: bold;
    }
</style>
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('menus.create') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Add new Page Menu
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Menu Name</th>                    
                    <th>Banner Image</th>
                    <th>Menu Order</th>
                    <th>Meta title</th>
                    <th>Top Menu</th>
                    <th>Meta Description</th>
                    <th><i class="fa fa-wrench fa-2x"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($menus as $key => $menu)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{ $menu->name }}</td>
                        <td><img src="{{ asset($menu->thumbnail) }}"  /></td>
                        <td>{{ $menu->menu_order }}</td>
                        <td>{{ $menu->meta_title }}</td>
                        <td class={{  $menu->is_top_menu ? "top-menu-bg" :""}}>{{ $menu->is_top_menu ? "Yes" :"No" }}</td>
                        <td>{{ $menu->meta_description }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('menus.show', $menu->id) }}" style="float: left" class="mr-2 btn btn-primary">View</a>
                            <a href="{{ route('menus.edit', $menu->id) }}" style="float: left" class="mr-2 btn btn-secondary">Edit</a>
                            <form class="form-inline ml-2" method="POST" style="float: left;" action="{{ route('menus.destroy', $menu->id) }}">
                                @method('delete')
                                @csrf
                                <button  onclick="return deleteMenu();"  type="submit" class="btn form-inline btn-danger">Delete</button>
                               
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if(!$menus->count())
                    <tr>
                        <td colspan="5">No banner added</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $menus->links() !!}
        </div>
    </main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
<script>
    function deleteMenu() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
   </script>