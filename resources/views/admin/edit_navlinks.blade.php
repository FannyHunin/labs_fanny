@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your links</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <form action="/add_link" method="post"class="mt-5 w-25">
                @csrf
                <label for="link1" class="d-flex flex-column">Link 1 :
                    <input type="text" name="link1" id="">
                </label>
                <label for="link2" class="d-flex flex-column">Link 2 :
                    <input type="text" name="link2" id="">
                </label>
                <label for="link3" class="d-flex flex-column">Link 3 :
                    <input type="text" name="link3" id="">
                </label>
                <label for="link4" class="d-flex flex-column">Link 4 :
                    <input type="text" name="link4" id="">
                </label>
                <button type="submit" class="btn btn-success">Done</button>
            </form>
            <div>
                <h3 class="mt-5">Current Navbar's links :</h3>
                    <div>
                        <ul>
                            <li>{{$linkData->link1}}</li>
                            <li>{{$linkData->link2}}</li>
                            <li>{{$linkData->link3}}</li>
                            <li>{{$linkData->link4}}</li>
                        </ul>
                        <a href="/edit_navlink" class="btn btn-info">Edit</a>
                    </div>
            </div>
        </div>
    </section>
@endsection