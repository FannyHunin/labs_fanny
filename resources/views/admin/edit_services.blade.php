@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Services :</h2>
        <form action="/update_services/{{$newEntry->id}}" method="post" class="d-flex flex-column mt-5">
            @csrf
            <label for="icon">Icon :
                <input type="text" name="icon" id="" value="{{$newEntry->icon}}" >
            </label>
            <label for="title">Title :
                <input type="text" name="title" id="" value="{{$newEntry->title}}">
            </label>
            <label for="text">Text :
                <input type="text" name="text" id="" value="{{$newEntry->text}}">
            </label>
            <button type="submit" class="btn btn-success" style="width: 5%">Done</button>
        </form>
    </section>
@endsection