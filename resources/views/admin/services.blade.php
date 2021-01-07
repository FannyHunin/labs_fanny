@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Services :</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/add_services" method="post" class="d-flex flex-column mt-5">
            @csrf
            <label for="icon">Icon :
                <input type="text" name="icon" id="">
            </label>
            <label for="title">Title :
                <input type="text" name="title" id="">
            </label>
            <label for="text">Text :
                <input type="text" name="text" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 5%">Done</button>
        </form>
        <h3 class="mt-5">Your services : </h3>
        <div>
            <div class="row">
                @foreach ($serviceData as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="service card p-3 text-center">
                            <div>
								<i class="{{$service->icon}}" style="font-size: 50px;"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$service->title}}</h2>
                                <p>{{$service->text}}</p>
                            </div>
                            <a href="/edit_services/{{$service->id}}" class="btn btn-info  mt-2 mx-auto" style="width: 15%">Edit</a>
                            <a href="/delete_services/{{$service->id}}" class="btn btn-danger  mt-2 mx-auto" style="width: 15%">Delete</a>
                        </div>
                    </div>
                    @if ($loop->iteration % 3 == 0)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection