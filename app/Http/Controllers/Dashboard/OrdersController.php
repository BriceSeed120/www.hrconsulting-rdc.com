<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where("orders.status","Processing")->paginate(15);
        return view('dashboard.orders.index', compact('orders'))->withTitle('Completed orders');
    }

    public function failed()
    {
       
    }

    public function pending()
    {
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Pending order list due to route issue
        $orders = Order::where("orders.status","Pending")->paginate(15);      
        return view('dashboard.orders.index', compact('orders'))->withTitle('Pending orders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::where("orders.id",$id)->first();     
        $roomIds = explode(',', $orders->room);
        $rooms = DB::table('roomssuits')->whereIn('id',$roomIds)->select('name','id')->get();
        return view('dashboard.orders.view', compact('orders','rooms'))->withTitle('View orders');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 1)
    {
        //failed order
        $orders = Order::where("orders.status","Failed")->paginate(15);
        return view('dashboard.orders.index', compact('orders'))->withTitle('Failed orders');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
