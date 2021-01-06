<?php

namespace App\Http\Controllers;

use App\Models\Navlink;
use Illuminate\Http\Request;

class NavlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linkData = Navlink::all()[0];
        return view('admin.edit_navlinks', compact('linkData'));
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
            "link1"=>"required|min:1|max:30",
            "link2"=>"required|min:1|max:30",
            "link3"=>"required|min:1|max:30",
            "link4"=>"required|min:1|max:30"
        ]);

        $newEntry = new Navlink;

        $newEntry->link1 = $request->link1;
        $newEntry->link2 = $request->link2;
        $newEntry->link3 = $request->link3;
        $newEntry->link4 = $request->link4;

        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navlink  $navlink
     * @return \Illuminate\Http\Response
     */
    public function show(Navlink $navlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navlink  $navlink
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $linkData = Navlink::all()[0];

        return view('admin.update_links', compact('linkData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navlink  $navlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $newEntry = Navlink::all()[0];

        $newEntry->link1 = $request->link1;
        $newEntry->link2 = $request->link2;
        $newEntry->link3 = $request->link3;
        $newEntry->link4 = $request->link4;

        $newEntry->save();
        return redirect("/edit_navlinks");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navlink  $navlink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navlink $navlink)
    {
        //
    }
}
