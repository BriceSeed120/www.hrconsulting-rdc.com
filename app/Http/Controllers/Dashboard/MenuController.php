<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Models\Order;
use App\Models\Contact;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('dashboard.menu.index')->withTitle('Menus');
       $menus = Menu::paginate(10);
       return view('dashboard.menu.index', compact('menus'))->withTitle('Menus');
    }

    public function dashboard(){
        $totalCompleted = Order::where("orders.status","Completed")
        ->count();
        $totalCompletedAmount = Order::where("orders.status","Completed")
        ->sum('amount');
        $orders = Order::orderBy('id', 'desc')
        ->take(10)
        ->get();
        $contacts = Contact::orderBy('id','desc')->take(10)
        ->get();

        // $today = date("Y-m-d");
        $today = date("2021-01-23");
        $totalCompletedDaily = Order::where("orders.status","Completed")
        ->whereBetween('created_at', [$today.' 00:00:00',$today.' 23:59:59'])
        ->count();

        $totalFailedDaily = Order::where("orders.status","Failed")
        ->whereBetween('created_at', [$today.' 00:00:00',$today.' 23:59:59'])
        ->count();

        $totalPendingDaily = Order::where("orders.status","Pending")
        ->whereBetween('created_at', [$today.' 00:00:00',$today.' 23:59:59'])
        ->count();


        $from = date("Y-m-d");
        $to =  date('Y-m-d', strtotime('-30 days'));
        

        $totalCompletedMonthly = Order::where("orders.status","Completed")
        ->whereBetween('created_at', [$from.' 00:00:00',$to.' 23:59:59'])
        ->count();

        $totalFailedMonthly = Order::where("orders.status","Failed")
        ->whereBetween('created_at', [$from.' 00:00:00',$to.' 23:59:59'])
        ->count();

        $totalPendingMonthly = Order::where("orders.status","Pending")
        ->whereBetween('created_at', [$from.' 00:00:00',$to.' 23:59:59'])
        ->count();

        return view('dashboard.home.index', compact('totalCompleted','totalCompletedAmount','orders','contacts',
        'totalCompletedDaily','totalFailedDaily','totalPendingDaily','totalCompletedMonthly','totalFailedMonthly','totalPendingMonthly'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu.create')->withTitle('Add new menu');
    }

    public function show($id)
    {
        $details = DB::table('menus')->where('id', $id)->first();
       return view('dashboard.menu.show', compact('details'))->withTitle('Menu View');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required'
        ], [
            'name.required' => 'Name is required',
            'name.required' => 'Description is required',
        ]);
        $validatedData['user_id'] = Auth::user()->id; 
        $validatedData['meta_title'] =  $request->meta_title;
        $validatedData['meta_keywords'] =  $request->meta_keywords;
        $validatedData['menu_order'] =  $request->menu_order;
        $validatedData['meta_description'] =  $request->meta_description;
        $validatedData['is_top_menu'] =  $request->is_top_menu;
        $validatedData['category'] =  $request->category;
        if($request->has('banner')) {
            $filename = time() . '.' . $request->banner->getClientOriginalExtension();
            $destinationPath = public_path('uploads/banner');
            $img = Image::make($request->banner->getRealPath());
            // $img->resize(460, 340, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath . '/' . $filename);
            $img->save($destinationPath . '/' . $filename);
            $img->resize(60, 40)->save($destinationPath . '/thumbnail/' . $filename);
            $validatedData['attachment'] = '/uploads/banner/' . $filename;
            $validatedData['thumbnail'] = '/uploads/banner/thumbnail/' . $filename;
            $validatedData['user_id'] = Auth::user()->id;
        }
        $menus = Menu::create($validatedData);
        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('dashboard.menu.edit', compact('menu'))->withTitle('Edit Menu');
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
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required'
            ], [
                'name.required' => 'Name is required',
                'name.required' => 'Description is required',
            ]);
            $validatedData['user_id'] = Auth::user()->id; 
            $validatedData['meta_title'] =  $request->meta_title;
            $validatedData['meta_keywords'] =  $request->meta_keywords;
            $validatedData['menu_order'] =  $request->menu_order;
            $validatedData['meta_description'] =  $request->meta_description;
            $validatedData['category'] =  $request->category;
            $validatedData['meta_description'] =  $request->meta_description;
            $validatedData['is_top_menu'] =  $request->is_top_menu;
            if($request->has('banner')) {
                $filename = time() . '.' . $request->banner->getClientOriginalExtension();
                $destinationPath = public_path('uploads/banner');
                $img = Image::make($request->banner->getRealPath());
                // $img->resize(460, 340, function ($constraint) {
                //     $constraint->aspectRatio();
                // })->save($destinationPath . '/' . $filename);
                $img->save($destinationPath . '/' . $filename);
                $img->resize(60, 40)->save($destinationPath . '/thumbnail/' . $filename);
                $validatedData['attachment'] = '/uploads/banner/' . $filename;
                $validatedData['thumbnail'] = '/uploads/banner/thumbnail/' . $filename;
                $validatedData['user_id'] = Auth::user()->id;
            }
            $affectedRows = Menu::where("id", $id)->update($validatedData);
            return back()->with('success', 'Menu update successfully.');
            
            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return back()->with('success', 'Menu deleted successfully.');
    }
}
