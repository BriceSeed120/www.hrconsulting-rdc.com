@extends('layouts.backend')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
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

    <div class="report-order">
        <div class="order-box primary-bg"> 
            <div class="text-title">Total Completed </div>    
            <div class="title-number">Orders : <span> {{ $totalCompleted }} </span></div>    
            <div class="title-number">Amount Taka: <span> {{$totalCompletedAmount}} Tk. </span> </div>    
        </div>
        <div class="order-box warning-bg">
            <div class="text-title padding30">Total Pending </div>    
            <div class="title-number">Orders : <span> {{ $totalCompleted }} </span></div>    
        </div>
        <div class="order-box info-bg">
            <div class="text-title padding30">Total Failed </div>    
            <div class="title-number">Orders : <span> {{ $totalCompleted }} </span></div>    
        </div>
        <div class="order-box success-bg"> 
            <div class="text-title padding30">Total System User </div>    
            <div class="title-number">User : <span> {{ $totalCompleted }} </span></div>    
        </div>
    </div>

    {{-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> --}}
<div style="height: 80px"> </div>
    <div class="row">       
        <p align='center' class='primary-bg' style="color: white; font-size: 18px; padding: 10px 50px;"> Last 10 Orders </p>     
         <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th> Phone</th>
                        <th> Email</th>
                        <th> Transction ID</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $customer)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->transaction_id }}</td>
                            <td>{{ $customer->startdate }} - {{ $customer->endDate }}</td>
                            <td id="status{{ $customer->id }}">{{ $customer->status }} </td>
                            <td>{{ $customer->created_at }} </td>
                            <td> <a href="{{ route('orders.show', $customer->id) }}" style="float: left"
                                    class="mr-2 btn btn-primary">View</a></td>
                        </tr>
                    @endforeach
                    @if (!$orders->count())
                        <tr>
                            <td colspan="5">No banner added</td>
                        </tr>
                    @endif
                </tbody>
            </table>
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
