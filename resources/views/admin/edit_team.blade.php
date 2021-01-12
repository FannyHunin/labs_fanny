@extends('adminlte::page');
@section('content')
    <section>
        <h2>Edit a team member :</h2>
        <form action="/update_teams/{{$teamData->id}}" method="post" class="d-flex flex-column w-25" enctype="multipart/form-data">
            @csrf
            <label for="name">Name : 
                <input type="text" name="name" value="{{$teamData->name}}">
            </label>
            <label for="function">Function : 
                <input type="text" name="function" value="{{$teamData->function}}">
            </label>
            <label for="src">Image :
                <input type="file" name="src">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection