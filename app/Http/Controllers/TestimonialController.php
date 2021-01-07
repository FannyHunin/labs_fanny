<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialsData = Testimonial::all()->take(6);
        return view('admin.testimonials', compact('testimonialsData'));
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
            'name' =>'required|min:1|max:250',
            'text' =>'required|min:1|max:40',
            'function' =>'required|min:1|max:60',
            'src' =>'required|min:1|max:100',
        ]);
        $newEntry = new Testimonial;
        $newEntry->name = $request->name;
        $newEntry->text = $request->text;
        $newEntry->function = $request->function;
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img', "public");
        $newEntry->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonialsData = Testimonial::find($id);
        return view('admin.edit_testimonials', compact('testimonialsData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEntry = Testimonial::find($id);
        $newEntry->name = $request->name;
        $newEntry->text = $request->text;
        $newEntry->function = $request->function;
        Storage::disk('public')->delete('img/'.$newEntry->src);
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img', 'public');
        $newEntry->save();
        return redirect()->back();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEntry = Testimonial::find($id);
        $newEntry->delete();
        return redirect()->back();
    }
}
