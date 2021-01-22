@extends('layouts.backend')
@section('content')
<?php 
$article_type = array("","Home Page Welcome","Home Page Rooms & Suites","Home Page Mix Bottom");
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('articles.create') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Add new coupon
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Article Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th><i data-feather="tool"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $k => $article)
                <tr>
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $article_type[$article->type] }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>                    
                    <td>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary" style="float: left;">Edit</a>
                        <form class="form-inline ml-2" method="POST" style="float: left;" action="{{ route('articles.destroy', $article->id) }}">
                            @method('delete')
                            @csrf
                            <button  onclick="return deleteMenu();"  type="submit" class="btn form-inline btn-danger">Delete</button>
                           
                        </form>
                    </td>
                </tr>
                @endforeach
                @if(!$articles->count())
                    <tr>
                        <td colspan="6">No article added</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $articles->links() !!}
        </div>
    </main>
@endsection

@section('head')

@endsection
<script>
    function deleteMenu() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
   </script>
@section('foot')

@endsection
