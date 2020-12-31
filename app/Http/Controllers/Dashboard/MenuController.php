<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       $menus = Menu::paginate(15);
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
        $validatedData['meta_description'] =  $request->meta_description;
        $menus = Menu::create($validatedData);
        return back()->with('success', 'User created successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.menu.edit')->withTitle('Edit menu');
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
