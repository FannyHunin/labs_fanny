@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your icon</h2>
        <div>
            <form action="/add_icon" method="post" enctype="multipart/form-data" class="mt-5">
                @csrf
                <label for="src" class="d-flex flex-column">
                    <input type="file" name="src" id="">
                </label>
                <button type="submit" class="btn btn-success" style="width: 5%">Done</button>
            </form>
            <div class="mt-5 d-flex flex-column">
                <h3>Current Website's icon :</h3>
                    <img src='{{asset("images/".$iconData->src)}}' class="w-25" alt="">
                    <a href="/delete_icon" class="btn btn-danger mt-2" style="width: 5%">Delete</a>
            </div>
        </div>
    </section>
@endsection