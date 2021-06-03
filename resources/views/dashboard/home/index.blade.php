@extends('layouts.backend')
@section('content')
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard: Welcome to Seed120 Webportal Administration</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

   <div style="height: 80px"> </div>
<div class="row">
    <p align='center' class='primary-bg' style="color: white; font-size: 18px; padding: 10px 50px;"> Last 10 contact list </p>     
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Contact Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $k => $contact)
                    <tr>
                        <td>{{ $k + 1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at }}</td>
                    </tr>
                @endforeach
                @if (!$contacts->count())
                    <tr>
                        <td colspan="6"> Nothing found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</div>

<div style="height: 80px"> </div>

</main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
