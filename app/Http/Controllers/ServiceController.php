<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceData = Service::all()->reverse();
        return view('admin.services', compact("serviceData"));
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
        $validateForm = $request->validate([
            'icon'=>'required|min:1|max:30',
            'title' =>'required|min:1|max:30',
            'text' =>'required|min:1|max:250',
        ]);
        $newEntry = new Service;
        $newEntry->icon = $request->icon;
        $newEntry->title = $request->title;
        $newEntry->text = $request->text;

        $newEntry->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newEntry = Service::find($id);
        return view('admin.edit_services', compact('newEntry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEntry = Service::find($id);
        $newEntry->icon = $request->icon;
        $newEntry->title = $request->title;
        $newEntry->text = $request->text;

        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEntry = Service::find($id);
        $newEntry->delete();
        return redirect()->back();
    }
}
