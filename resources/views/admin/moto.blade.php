@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Moto : </h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/update_moto" method="post" class="d-flex flex-column">
            @csrf
            <label for="moto" class="d-flex flex-column w-25">CURRENT MOTO : {{$motoData->moto}}
                <input type="text" name="moto" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 5%">Done</button>
        </form>
    </section>
@endsection