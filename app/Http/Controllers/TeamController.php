<?php

namespace App\Http\Controllers;

use App\Models\CenterTeam;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamData = Team::all();
        return view('admin.teams', compact('teamData'));
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
            'src' =>'required|min:1|max:100',
            'name' =>'required|min:1|max:100',
            'function' =>'required|min:1|max:60',
        ]);
        $newEntry = new Team;
        $newEntry->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img/team', "public");
        $newEntry->name = $request->name;
        $newEntry->function = $request->function;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamData = Team::find($id);
        return view('admin.edit_team', compact('teamData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEntry = Team::find($id);
        $newEntry->delete();
        $newEntry->name = $request->name;
        $newEntry->function = $request->function;
        $newEntry->src = $request->file('src')->hashName();
        Storage::disk('public')->delete('img/team'.$newEntry->src);
        $newEntry->save();
        $request->file("src")->storePublicly("img/team", "public");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEntry = Team::find($id);
        $newEntry->delete();
        return redirect()->back();
    }

    public function center(Request $request){
        $centerDelete = CenterTeam::all();
        $centerDelete[0]->delete();

        $newEntry = new CenterTeam;
        $newEntry->center_id = $request->center_id;
        $newEntry->save();
        return redirect()->back();
    }
}
