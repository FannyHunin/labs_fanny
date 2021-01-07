@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your contact form :</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/update_contactForm" method="post" class="d-flex flex-column w-25">
            @csrf
            <label for="title">Title : 
                <input type="text" name="title" id="" value="{{$contactFormData->title}}">
            </label>
            <label for="text">Text : 
                <input type="text" name="text" id="" value="{{$contactFormData->text}}">
            </label>
            <label for="adress">Adress : 
                <input type="text" name="adress" id="" value="{{$contactFormData->adress}}">
            </label>
            <label for="phone">Phone number : 
                <input type="text" name="phone" id="" value="{{$contactFormData->phone}}">
            </label>
            <label for="mail">Mail adress :
                <input type="text" name="mail" id="" value="{{$contactFormData->mail}}">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection