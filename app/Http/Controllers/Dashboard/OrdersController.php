<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        if($keyword){
            $orders = Order::where("orders.phone",$keyword)
            ->orWhere("orders.transaction_id",$keyword)
            ->orWhere("orders.email",$keyword)
            ->paginate(15);
        }
        else{
            $orders = Order::where("orders.status","Processing")
            ->orWhere("orders.status","Completed")
            ->paginate(15);
        }
       
        $isSuccess = true;
        return view('dashboard.orders.index', compact('orders','isSuccess','keyword'))->withTitle('Completed orders');
    }

    public function customOrder(Request $request){
        $validatedData = $request->validate([
            'manual_transaction_id' => 'required',
            'manual_comment' => 'required',
            'manual_amount' => 'required'
            ], [
                'name.required' => 'Name is required',
                'manual_comment.required' => 'manual_comment is required',
                'amount.required' => 'amount is required'
            ]);
            $validatedData['updated_at'] =  date('Y-m-d');
            $validatedData['status'] =  'Completed';
            $affectedRows = Order::where("id", $request->orderId)->update($validatedData);
        return response()->json(array('success'=> 'Order update successfully'), 200);
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
        $keyword = "";
        // Pending order list due to route issue
        $orders = Order::where("orders.status","Pending")->paginate(15);   
        $isSuccess = false;   
        return view('dashboard.orders.index', compact('orders','isSuccess','keyword'))->withTitle('Pending orders');
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
        $keyword = "";
        $isSuccess = false;   
        $orders = Order::where("orders.status","Failed")->paginate(15);
        return view('dashboard.orders.index', compact('orders','isSuccess','keyword'))->withTitle('Failed orders');
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
