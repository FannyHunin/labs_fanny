<?php

namespace App\Http\Controllers;

use App\Models\TeamTitle;
use Database\Seeders\TeamTitleSeeder;
use Illuminate\Http\Request;

class TeamTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamsTitleData = TeamTitle::all()[0];
        return view('admin.teamsTitle', compact('teamsTitleData'));
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
     * @param  \App\Models\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function show(TeamTitle $teamTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamTitle $teamTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $newEntry = TeamTitle::all()[0];
        $newEntry->delete();
        $newEntry->title = $request->title;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamTitle  $teamTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamTitle $teamTitle)
    {
        //
    }
}
