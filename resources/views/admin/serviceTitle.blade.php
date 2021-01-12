@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your title :</h2>
        <h3>{{$serviceTitleData->title}}</h3>
        <form action="/update_serviceTitle" method="post" class="d-flex flex-column w-25">
            @csrf
            <label for="title">Title (text between "()" will appear green) :
                <input type="text" name="title" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection