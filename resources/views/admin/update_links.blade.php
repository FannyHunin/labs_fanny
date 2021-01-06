@extends('adminlte::page')
@section('content')
    <section>
        <h2>Update your links</h2>
        <div>
            <form action="/update_link" method="post"class="mt-5 w-25">
                @csrf
                <label for="link1" class="d-flex flex-column">Link 1 :
                    <input type="text" name="link1" id="" placeholder="{{$linkData->link1}}">
                </label>
                <label for="link2" class="d-flex flex-column">Link 2 :
                    <input type="text" name="link2" id="" placeholder="{{$linkData->link2}}">
                </label>
                <label for="link3" class="d-flex flex-column">Link 3 :
                    <input type="text" name="link3" id=""placeholder="{{$linkData->link3}}">
                </label>
                <label for="link4" class="d-flex flex-column">Link 4 :
                    <input type="text" name="link4" id=""placeholder="{{$linkData->link4}}">
                </label>
                <button type="submit" class="btn btn-success">Done</button>
            </form>
        </div>
    </section>
@endsection