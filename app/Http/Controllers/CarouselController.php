<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carouselData = Carousel::all();

        return view('admin.carousel', compact('carouselData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'src' =>'required'
        ]);
        $newEntry = new Carousel;
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly("images", "public");
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEntry = Carousel::find($id);
        $newEntry->delete(); 
        Storage::disk('public')->delete('images/'.$newEntry->src);
        return redirect()->back();
    }
}
