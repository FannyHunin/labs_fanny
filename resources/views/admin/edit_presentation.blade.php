@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your presentation :</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/update_presentation/{{$presentationData->id}}" method="post" class="d-flex flex-column mt-5 w-50">
            @csrf
            <label for="title">Title (text between "()" will appear green) :
                <input type="text" name="title" id="" value="{{$presentationData->title}}">
            </label>
            <label for="text1">Text 1 :
                <input type="text" name="text1" id="" value="{{$presentationData->text1}}">
            </label>
            <label for="text2">Text 2 :
                <input type="text" name="text2" id="" value="{{$presentationData->text2}}">
            </label>
            <label for="btn">Button :
                <input type="text" name="btn" id="" value="{{$presentationData->btn}}">
            </label>
            <button type="submit" class="btn btn-success" style="width: 10%">Done</button>
        </form>
    </section>
@endsection