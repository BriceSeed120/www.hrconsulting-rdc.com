<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


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
        if($request->has('banner')) {
            $filename = time() . '.' . $request->banner->getClientOriginalExtension();
            $destinationPath = public_path('uploads/banner');
            $img = Image::make($request->banner->getRealPath());
            $img->resize(460, 340, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $filename);
            $img->resize(60, 40)->save($destinationPath . '/thumbnail/' . $filename);
            $validatedData['attachment'] = '/uploads/banner/' . $filename;
            $validatedData['thumbnail'] = '/uploads/banner/thumbnail/' . $filename;
            $validatedData['user_id'] = Auth::user()->id;
        }

        $menus = Menu::create($validatedData);
        return back()->with('success', 'Menu created successfully.');

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
            if($request->has('banner')) {
                $filename = time() . '.' . $request->banner->getClientOriginalExtension();
                $destinationPath = public_path('uploads/banner');
                $img = Image::make($request->banner->getRealPath());
                $img->resize(460, 340, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $filename);
                $img->resize(60, 40)->save($destinationPath . '/thumbnail/' . $filename);
                $validatedData['attachment'] = '/uploads/banner/' . $filename;
                $validatedData['thumbnail'] = '/uploads/banner/thumbnail/' . $filename;
                $validatedData['user_id'] = Auth::user()->id;
            }
           // $validatedData = Menu::find($id);
           // $validatedData->save();
            //Menu::update($validatedData, $id); 
           // $menu = Menu::findOrFail($id);
           // $menu->update($validatedData, $id);
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
