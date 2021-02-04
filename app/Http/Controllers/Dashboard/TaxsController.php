<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Taxs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TaxsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxs = Taxs::all();
        return view('dashboard.tax.index', compact('taxs'))->withTitle('Manage taxs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tax.create')->withTitle('Add tax');
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
            'tax' => 'required',
            'tax' => 'required',
            'services_charge' => 'required',
        ], [
            'tax.required' => 'Tax filed is required',
            'vat.required' => 'Vat filed is required',
            'services_charge.required' => 'Vat filed is required'
        ]);
        $roomssuits = Taxs::create($validatedData);
        return redirect()->route('taxs.index')->with('success', 'Tax & vat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taxs = Taxs::findOrFail($id);
        return view('dashboard.tax.edit', compact('taxs'))->withTitle('Edit vat & tax');
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
            'tax' => 'required',
            'vat' => 'required',
            'services_charge' => 'required',
        ], [
            'tax.required' => 'Tax filed is required',
            'vat.required' => 'Vat filed is required',
            'services_charge.required' => 'Vat filed is required'
        ]);
        $taxs = Taxs::where("id", $id)->update($validatedData);
        return redirect()->route('taxs.index')->with('success', 'Tax & vat update successfully.');
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
