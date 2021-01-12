@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Tags :</h2>
        <form action="/add_tags" method="post" class="d-flex flex-column w-25">
            @csrf
            <label for="tags">
                <input type="text" name="tags" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
        <div>
            <h3>Current Tags :</h3>
            <div class="row">
                @foreach ($tagData as $tag)
                <div class="alert alert-info ml-2" style="width: max-content">
                    {{$tag->tags}}
                    <a href="/delete_tags/{{$tag->id}}" class="btn btn-danger">Delete</a>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection