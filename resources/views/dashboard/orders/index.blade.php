@extends('layouts.backend')
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
                    <th>Customer Name</th>                    
                    <th> Phone</th>
                    <th> Email</th>
                    <th> Address</th> 
                    <th>Booking Date</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key => $customer)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->startdate }} - {{ $customer->endDate }}</td>
                        <td>{{ $customer->status }} </td>
                        <td>{{ $customer->created_at }} </td>
                        <td> <a href="{{ route('orders.show', $customer->id) }}" style="float: left" class="mr-2 btn btn-primary">View</a></td>
                    </tr>
                @endforeach
                @if(!$orders->count())
                    <tr>
                        <td colspan="5">No banner added</td>
                    </tr>
                @endif
                </tbody>
            </table>
            {!! $orders->links() !!}
        </div>
    </main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
