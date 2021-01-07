@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit a testimonial :</h2>
        <form action="/update_testimonials/{{$testimonialsData->id}}" enctype="multipart/form-data" method="post" class="d-flex flex-column w-25">
            @csrf
            <label for="name">Name :
                <input type="text" name="name" id="" value="{{$testimonialsData->name}}">
            </label>
            <label for="text">Commentary :
                <input type="text" name="text" id="" value="{{$testimonialsData->text}}">
            </label>
            <label for="function">Function : 
                <input type="text" name="function" id="" value="{{$testimonialsData->function}}">
            </label>
            <label for="src">Avatar
                <input type="file" name="src" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection