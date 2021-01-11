<?php

namespace App\Http\Controllers;

use App\Models\PrimeService;
use Illuminate\Http\Request;

class PrimeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primeServicesData = PrimeService::all();
        return view('admin.primeServices', compact('primeServicesData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry = new PrimeService;
        $newEntry->title = $request->title;
        $newEntry->text = $request->text;
        $newEntry->icon = $request->icon;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrimeService  $primeService
     * @return \Illuminate\Http\Response
     */
    public function show(PrimeService $primeService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrimeService  $primeService
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $primeServicesData = PrimeService::find($id);
        return view('admin.edit_primeServices', compact('primeServicesData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrimeService  $primeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEntry = PrimeService::find($id);
        $newEntry->title = $request->title;
        $newEntry->text = $request->text;
        $newEntry->icon = $request->icon;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrimeService  $primeService
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEntry = PrimeService::find($id);
        $newEntry->delete();
        return redirect()->back();
    }
}
