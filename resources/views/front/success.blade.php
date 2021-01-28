<?php
if(!isset($order_detials)){
    header('Location: '.'/');
    die('Not allowed');
};
?>
<style>

#menuToggle span {
        background: #b4a43e !important;
    }

    .book-now,
    .book-now a {
        color: #b4a43e !important;
    }

    .header .social-ul li a {
        color: #b4a43e !important;
        padding-right: 20px;
    }
@font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/playfairdisplay/v21/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    .top-menu ul li a{
       color: #b4a43e !important;
   }
   .success-booking{
    margin-top: 140px;
    margin-bottom: 50px;
    border: 1px solid #ccc;
    border-radius: 20px;
    padding: 30px;
    width: 100%;
}
.success-booking .success-msg{
    font-size: 25px;
    color: green;
    text-align: center;
}
.success-booking .message{
    text-align: center;
    font-size: 14px;
    padding-top:10px; 
    padding-bottom: 20px;
}
.property-pay{
    display: flex;
    justify-content: space-between;

}
.property-pay .item-name{ 
    width: 120px;
    font-size: 13px;
}
.property-pay .dot{
    font-size: 20px;
    color: #aaa;
    width: 50px;
}
.property-pay .item-value{ 
    width: 190px;
    font-size: 13px;
}
.backto{
    margin: auto;
    background: green;
    color: white;
    padding: 10px 30px;
    border-radius: 6px;
    
}
.backbtn{
    height: 50px;
    margin-top:30px;
    display: flex;    
    justify-content: center
}
</style>
@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="success-booking">
                    <div class="success-msg">Transaction successful!</div>
                    <div class="message"> Your transaction of TK. {{ $order_detials->amount}} BDT was successful.</div>
                    <div class="property-pay">
                        <div class="item-name">Mobile </div>
                        <div class="dot">:</div>
                        <div class="item-value"> {{ $order_detials->phone}}</div>
                    </div>
                    <div class="property-pay">
                        <div class="item-name">Email </div>
                        <div class="dot">:</div>
                        <div class="item-value">{{ $order_detials->email}} </div>
                    </div>
                    <div class="property-pay">
                        <div class="item-name">Amount </div>
                        <div class="dot">:</div>
                        <div class="item-value"> {{ $order_detials->amount}} </div>
                    </div>
                    <div class="property-pay">
                        <div class="item-name">Transction ID  </div>
                        <div class="dot">:</div>
                        <div class="item-value">  {{ $order_detials->transaction_id}} </div>
                    </div>
                    <div class="property-pay">
                        <div class="item-name">Date  </div>
                        <div class="dot">:</div>
                        <div class="item-value"> {{ $order_detials->startdate}} To  {{ $order_detials->endDate}}</div>
                    </div>
                    <div class="backbtn">
                        <a href="{{ route('booking')}}" class="backto"> Back</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

 

@endsection

@section('head')

@endsection

@section('foot')

@endsection
