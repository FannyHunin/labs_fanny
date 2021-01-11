@extends('adminlte::page')
@section('content')
    <section>
        <h2>Edit your Prime Services :</h2>
            <form action="/add_primeServices" method="post" class="d-flex flex-column w-25 mt-5">
                @csrf
                <label for="title">Service Title : 
                    <input type="text" name="title">
                </label>
                <label for="text">Service Description : 
                    <input type="text" name="text">
                </label>
                <label for="icon">Service Icon :
                    <input type="text" name="icon">
                </label>
                <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
            </form>
        <div>
            <h3 class="mt-5">Current Prime Services :</h3>
            <div class="row">
                @foreach ($primeServicesData as $pservices)
                    <div class="col-4 mt-3">
                        <div class="icon-box light text-center border border-muted bg-light p-3">
							<div class="service-text">
								<h2>{{$pservices->title}}</h2>
								<p>{{$pservices->text}}</p>
							</div>
							<div class="icon">
								<i class="{{$pservices->icon}} text-success" style="font-size: 80px"></i>
                            </div>
                            <a href="/edit_primeServices/{{$pservices->id}}" class="btn btn-info">Edit</a>
                            <a href="/delete_primeServices/{{$pservices->id}}" class="btn btn-danger">Delete</a>
						</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection