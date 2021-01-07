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

