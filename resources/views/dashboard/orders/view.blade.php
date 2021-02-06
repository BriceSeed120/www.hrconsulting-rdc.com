@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">View Order</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('orders.edit',2) }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="arrow-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    @if ($orders)
                    <tr>
                        <th width="25%"> Order Status </th>
                        <td> {{ $orders->status }}</td>
                    </tr>
                        <tr>
                            <th width="25%"> Customer Name </th>
                            <td> {{ $orders->name }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Customer Phone </th>
                            <td> {{ $orders->phone }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Customer Email </th>
                            <td> {{ $orders->email }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Selected Room </th>
                            <td>
                                @foreach($rooms as $key=>$room)
                                    <a target="_blank" href="{{ route('roomssuits.show', $room->id) }}"> {{$room->name}} </a> </br/>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th width="25%"> Select Adult Persone </th>
                            <td> {{ $orders->adult }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Selected Child </th>
                            <td> {{ $orders->child }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Start Date </th>
                            <td> {{ $orders->startdate }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> End Date </th>
                            <td> {{ $orders->endDate }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Amount </th>
                            <td> {{ $orders->amount }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Quantity </th>
                            <td> {{ $orders->quantity }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Tax </th>
                            <td> {{ $orders->tax }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Service Charge </th>
                            <td> {{ $orders->service_charge }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Arrival Time </th>
                            <td> {{ $orders->arrival_time }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Additoanl Comment </th>
                            <td> {{ $orders->additional_comment }}</td>
                        </tr>

                        <tr>
                            <th width="25%"> Postal Code </th>
                            <td> {{ $orders->postal_code }}</td>
                        </tr>

                        <tr>
                            <th width="25%"> City </th>
                            <td> {{ $orders->city }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Transaction ID </th>
                            <td> {{ $orders->transaction_id }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Currency </th>
                            <td> {{ $orders->currency }}</td>
                        </tr>

                        <tr>
                            <th width="25%"> Order Date </th>
                            <td> {{ $orders->created_at }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Manual Transaction ID </th>
                            <td> {{ $orders->manual_transaction_id }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Manual Comment </th>
                            <td> {{ $orders->manual_comment }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Manual Amount  </th>
                            <td> {{ $orders->manual_amount }}</td>
                        </tr>
                        <tr>
                            <th width="25%"> Last Updated  </th>
                            <td> {{ $orders->updated_at }}</td>
                        </tr>
                    @else
                        <h4>Order does not exists!. </h4>
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
