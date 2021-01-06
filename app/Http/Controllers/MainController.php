<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Icon;
use App\Models\Navlink;
use App\Models\Moto;
use App\Models\Main;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];
        $carouselData = Carousel::all();
        $motoData = Moto::all()[0];

        return view('pages.home', compact('iconData', 'linkData', 'carouselData', 'motoData'));
    }
    public function services()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];

        return view('pages.services', compact('iconData', 'linkData'));
    }
    public function blog()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];

        return view('pages.blog', compact('iconData', 'linkData'));
    }
    public function contact()
    {
        $iconData = Icon::all();
        $linkData = Navlink::all()[0];

        return view('pages.contact', compact('iconData', 'linkData'));
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
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function show(Main $main)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function edit(Main $main)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Main $main)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Main  $main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Main $main)
    {
        //
    }
}
