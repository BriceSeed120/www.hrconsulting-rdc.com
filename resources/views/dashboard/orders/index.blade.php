@extends('layouts.backend')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
    <style>
        .custom-modal-popup {
            display: none;
            width: 400px;
            height: 440px;
            padding: 20px;
            margin: auto;
            z-index: 9999999;
            background: white;
            box-shadow: 14px 14px 10px #000;
            border-radius: 20px;
            position: fixed;
            top: 90px;
            left: 50%;
            transform: translate(-50%, 10px);

            border: 1px solid rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding-box;
            background-clip: padding-box;
        }

        .close-modal {
            position: absolute;
            background: #f6d83e;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            padding: 10px 15px;
            border-radius: 28px;
            right: 30px;
            top: 30px;
        }

        .manual-order {
            font-size: 16px;
            font-weight: bold;
            padding-top: 15px;
        }

        .pay-goto-now {
            background: #437ca8;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            padding: 10px 40px;
            border-radius: 28px;
            width: 200px;
            margin-top: 20px;
        }

        .update-room {
            margin: 30px 0px 20px 0px;
        }

        .update-room input {
            margin-bottom: 30px;
        }

    </style>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>


        <div class="custom-modal-popup" id="manualPopup">
            <div class="manual-order"> Manual Order Process Form </div>
            <p> You can take payment via offline/manual process like bKash, rocket, online banking etc. After you got 
                recieve payment then entry here!.

            </p>
            <div class="update-room">
                <input type="text" id="orderId" hidden>
                <input type="text" id="transaction_id" class="form-control" placeholder="Transactional id"value="">

                <input type="text" id="manual_comment" class="form-control" placeholder="Comment"
                    value="">

                <input type="number" min="100" id="amount" class="form-control" placeholder="Receive Amount"
                    value="">
            </div>
            <div class="close-modal" onclick="closeModal()">Close </div>
           
            <div class="pay-goto-now" onclick="updateOrder()">
                Update Order
            </div>
        </div>
        <form method="get" action="{{ route('orders.index') }}"> 
        <div class="row" style="">
                
                 <div class="col-md-4">
                    <input type="text" value="{{ $keyword }}" name="keyword" class="form-control" placeholder="Transaction ID / Phone / Email" />
                </div>
                <div class="col-md-3">
                    <input type="submit" value="Search Order" class="mr-2 btn btn-primary"/>
                </div>
           
    </div>
</form>
     
            
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer Name</th>
                        <th> Phone</th>
                        <th> Email</th>
                        <th> Transction ID</th>
                        <th> Payment Type</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th><i data-feather="tool"></i></th>
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
                            <td>{{ $customer->payment_type }}</td>
                            <td>{{ $customer->startdate }} - {{ $customer->endDate }}</td>
                            <td id="status{{ $customer->id }}">{{ $customer->status }} </td>
                            <td>{{ $customer->created_at }} </td>
                            <td> 
                                @if(($customer->status == "Pending") || ($customer->status == "Failed"))
                                <a style="float: left; width: 130px" class="mr-4 btn btn-warning"
                                onclick="customOrder({{$customer->id}})">Custom Order</a>
                                @endif
                               <br/></br>

                            <a href="{{ route('orders.show', $customer->id) }}" style="float: left; width: 130px"
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
            {!! $orders->links() !!}
        </div>
    </main>
@endsection

@section('head')

@endsection

@section('foot')
    <script type="text/javascript">
        function customOrder(orderId) {
            if (!confirm("Are you sure you want to process manual order ? ")) {

            } else {
                $("#orderId").val(orderId);
                $("#manualPopup").show();
            }
        }

        function updateOrder() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var transaction_id = $("#transaction_id").val();
            var manual_comment = $("#manual_comment").val();
            var amount = $("#amount").val();
            var orderId = $("#orderId").val();
            if(transaction_id && manual_comment && amount){
                $("#transaction_id").css('border','1px solid #ccc');
                $("#manual_comment").css('border','1px solid #ccc');
                $("#amount").css('border','1px solid #ccc');
                $.ajax({
                type: 'POST',
                url: "{{ route('customOrder') }}",
                data: {
                    orderId: orderId,
                    manual_transaction_id: transaction_id,
                    manual_comment:manual_comment,
                    manual_amount:amount
                },
                success: function(data) {
                    if(data.success){
                        $("#manualPopup").hide();
                        $("#status"+orderId).html("<font color='green'> Completed </font>");
                        location.href="{{ route('orders.index') }}";
                    }
                   
                }
            });
            }
            else{
                if(transaction_id){
                    $("#transaction_id").css('border','1px solid #ccc');
                }
                else{
                    $("#transaction_id").css('border','1px solid red');
                }
                if(manual_comment){
                    $("#manual_comment").css('border','1px solid #ccc');
                }
                else{
                    $("#manual_comment").css('border','1px solid red');
                }
                if(amount){
                    $("#amount").css('border','1px solid #ccc');
                }
                else{
                    $("#amount").css('border','1px solid red');
                }
            }

        }

         function closeModal(){
            $("#manualPopup").hide();
        }

    </script>
@endsection
