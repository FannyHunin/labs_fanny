@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your carousel's images</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/add_carousel" method="post" enctype="multipart/form-data" class="mt-5 d-flex flex-column w-25">
            @csrf
            <label for="src">Add an image : 
                <input type="file" name="src" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
        <div>
            <h3 class="mt-5">Your current images :</h3>
            <div class="row">
                @foreach ($carouselData as $carousel)
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('images/'.$carousel->src)}}" alt="">
                    <a href="/delete_carousel/{{$carousel->id}}" class="btn btn-danger mt-2 mx-auto">Delete</a>
                </div>
                @if ($loop->iteration % 4 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
            </div>
        </div>
    </section>
@endsection