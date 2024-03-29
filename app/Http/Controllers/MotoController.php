<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motoData = Moto::all()[0];
        return view('admin.moto', compact('motoData'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function show(Moto $moto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function edit(Moto $moto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateForm = $request->validate([
            'moto' =>'required|min:1|max:250',
        ]);
        $newEntry = Moto::all()[0];
        $newEntry->moto = $request->moto;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moto  $moto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moto $moto)
    {
        //
    }
}
