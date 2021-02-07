<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Dinings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class DiningsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinings = Dinings::paginate(15);
        return view('dashboard.dinings.index', compact('dinings'))->withTitle('Dinings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dinings.create')->withTitle('Add new dining');
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
            'description' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'description.required' => 'Description filed is required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['property_label'] =  $request->property_label;
        $validatedData['rate_in_bdt'] =  $request->rate_in_bdt;
        $validatedData['rate_in_usd'] =  $request->rate_in_usd;
        if ($request->has('feature_image')) {
            $filename = time() . '.' . $request->feature_image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/feature_images');
            $img = Image::make($request->feature_image->getRealPath());
            // $img->resize(460, 340, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath . '/' . $filename);
            $img->save($destinationPath . '/' . $filename);
            $validatedData['feature_image'] = '/uploads/feature_images/' . $filename;
            $validatedData['user_id'] = Auth::user()->id;
        }

        $itemProperty = "";
        foreach ($request->property_list as $val) {
            $itemProperty =  $itemProperty . $val . ",";
        }
        $validatedData['property_list'] =  rtrim($itemProperty, ',');
        if ($request->hasfile('gallery')) {
            $files = "";
            foreach ($request->file('gallery') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('uploads/feature_images'), $name);
                $files =  $files . '/uploads/feature_images/' . $name . ",";
            }
            $validatedData['gallery'] = rtrim($files, ',');
        } else {
            $validatedData['gallery'] = "";
        }

        $dinings = Dinings::create($validatedData);
        return redirect()->route('dinings.index')->with('success', 'Dining created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dinings = Dinings::findOrFail($id);
        return view('dashboard.dinings.view', compact('dinings'))->withTitle('View dining');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dinings = Dinings::findOrFail($id);
        return view('dashboard.dinings.edit', compact('dinings'))->withTitle('Edit dining');
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
            'description' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'description.required' => 'Description filed is required',
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['property_label'] =  $request->property_label;
        $validatedData['rate_in_bdt'] =  $request->rate_in_bdt;
        $validatedData['rate_in_usd'] =  $request->rate_in_usd;
        if ($request->has('feature_image')) {
            $filename = time() . '.' . $request->feature_image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/feature_images');
            $img = Image::make($request->feature_image->getRealPath());
            // $img->resize(460, 340, function ($constraint) {
            //     $constraint->aspectRatio();
            // })->save($destinationPath . '/' . $filename);
            $img->save($destinationPath . '/' . $filename);
            $validatedData['feature_image'] = '/uploads/feature_images/' . $filename;
            $validatedData['user_id'] = Auth::user()->id;
        }

        $itemProperty = "";
        foreach ($request->property_list as $val) {
            $itemProperty =  $itemProperty . $val . ",";
        }
        $validatedData['property_list'] =  rtrim($itemProperty, ',');
        if ($request->hasfile('gallery')) {
            $files = "";
            foreach ($request->file('gallery') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('uploads/feature_images'), $name);
                $files =  $files . '/uploads/feature_images/' . $name . ",";
            }
            $validatedData['gallery'] = rtrim($files, ',');
        }

        $dinings = Dinings::where("id", $id)->update($validatedData);
        return redirect()->route('dinings.index')->with('success', 'Dinings  update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinings = Dinings::findOrFail($id);
        $dinings->delete();
        return back()->with('success', 'Dining deleted successfully.');
    }
}
