@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Prime Services :</h2>
            <form action="/update_primeServices/{{$primeServicesData->id}}" method="post" class="d-flex flex-column w-25 mt-5">
                @csrf
                <label for="title">Service Title : 
                    <input type="text" name="title" value="{{$primeServicesData->title}}">
                </label>
                <label for="text">Service Description : 
                    <input type="text" name="text" value="{{$primeServicesData->text}}">
                </label>
                <label for="icon">Service Icon :
                    <input type="text" name="icon" value="{{$primeServicesData->icon}}">
                </label>
                <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
            </form>
    </section>
@endsection