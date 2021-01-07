@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your video :</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/update_video" method="post" enctype="multipart/form-data" class="d-flex flex-column w-25">
            @csrf
            <label for="src">Video image :
                <input type="file" name="img" id="">
            </label>
            <label for="src">Video link :
                <input type="text" name="src" id="" value="{{$videoData->src}}">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection