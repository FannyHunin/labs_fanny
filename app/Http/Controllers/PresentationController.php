<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentationData = Presentation::all()[0];
        return view('admin.edit_presentation', compact("presentationData"));
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
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateForm = $request->validate([
            'title' =>'required|min:1|max:60',
            'text1' =>'required|min:1',
            'text2' =>'required|min:1',
            'btn' =>'required|min:1|max:20',
        ]);
        $newEntry = Presentation::all()[0];
        $newEntry->title = $request->title;
        $newEntry->text1 = $request->text1;
        $newEntry->text2 = $request->text2;
        $newEntry->btn = $request->btn;

        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
