<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Meetingsevents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MeetingseventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings_events = Meetingsevents::paginate(15);
        return view('dashboard.meetings_events.index', compact('meetings_events'))->withTitle('Meetings and events');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.meetings_events.create')->withTitle('Add new Meetings and events');
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
            'rate_in_bdt' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'description.required' => 'Description filed is required',
            'rate_in_bdt.required' => 'Rate in BDT filed is required',
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

        $meetings_events = Meetingsevents::create($validatedData);
        return redirect()->route('meetings_events.index')->with('success', 'Meetings & events created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meetings_events = Meetingsevents::findOrFail($id);
        return view('dashboard.meetings_events.view', compact('meetings_events'))->withTitle('View Meetings & Events');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meetings_events = Meetingsevents::findOrFail($id);
        return view('dashboard.meetings_events.edit', compact('meetings_events'))->withTitle('Edit Meetings & Events');
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
            'rate_in_bdt' => 'required',
        ], [
            'name.required' => 'Name filed is required',
            'description.required' => 'Description filed is required',
            'rate_in_bdt.required' => 'Rate in BDT filed is required',
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

        $meetings_events = Meetingsevents::where("id", $id)->update($validatedData);
        return redirect()->route('meetings_events.index')->with('success', 'Meetings & Events update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meetings_events = Meetingsevents::findOrFail($id);
        $meetings_events->delete();
        return back()->with('success', 'Meetings & Events deleted successfully.');
    }
}
