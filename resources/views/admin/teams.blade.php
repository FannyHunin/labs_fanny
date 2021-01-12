@extends('adminlte::page')
@section('content')
    <section>   
        <h3>Edit your team :</h3>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="add_teams" method="post" class="d-flex flex-column w-25" enctype="multipart/form-data">
            @csrf
            <label for="name">Name : 
                <input type="text" name="name">
            </label>
            <label for="function">Function : 
                <input type="text" name="function">
            </label>
            <label for="src">Image :
                <input type="file" name="src">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
        <form action="/add_center" method="post" class="mt-5 d-flex flex-column" style="width: 10%">
            @csrf
            <h4>Choose a principal member :</h4>
            <select name="center_id" id="">
                @foreach ($teamData as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
                
            </select>
            <button type="submit" class="btn btn-success mt-2" style="width: 40%">Done</button>
        </form>
        <h3>Your team :</h3>
        <div class="row">
            @foreach ($teamData as $team)
                <div class="col-sm-4 border border-muted p-3 rounded d-flex flex-column align-items-center text-center">
                    <div class="member">
                        <img src="{{asset("img/team/".$team->src)}}" alt="" width="360" height="448">
                        <h2>{{$team->name}}</h2>
                        <h3>{{$team->function}}</h3>
                    </div>
                    <a href="/edit_teams/{{$team->id}}" class="btn btn-info mt-2 mw-auto w-25">Edit</a>
                    <a href="/delete_teams/{{$team->id}}" type="submit" class="btn btn-danger mt-2 mw-auto w-25">Delete</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection

