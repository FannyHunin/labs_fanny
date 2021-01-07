@extends('adminlte::page')
@section('content')
    <section>
        <h2>Add a testimonial :</h2>
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 17%">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/add_testimonials" enctype="multipart/form-data" method="post" class="d-flex flex-column w-25">
            @csrf
            <label for="name">Name :
                <input type="text" name="name" id="">
            </label>
            <label for="text">Commentary :
                <input type="text" name="text" id="">
            </label>
            <label for="function">Function : 
                <input type="text" name="function" id="">
            </label>
            <label for="src">Avatar
                <input type="file" name="src" id="">
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
        <div>
            <h3>Your Testimonials : </h3>
            <div class="row mt-5">
                @foreach ($testimonialsData as $testimonials)
					<!-- single testimonial -->
					<div class="card p-4 col-3">
						<p>{{$testimonials->text}}</p>
						<div class="client-info">
							<div>
								<img style="width: 100px; height: 100px;" src="{{asset('img/'.$testimonials->src)}}" alt="">
							</div>
							<div class="client-name">
								<h2>{{$testimonials->name}}</h2>
								<p>{{$testimonials->function}}</p>
							</div>
                        </div>
                        <a href="/edit_testimonials/{{$testimonials->id}}" class="w-25 mx-auto mt-2 btn btn-info">Edit</a>
                        <a href="/delete_testimonials/{{$testimonials->id}}" class="w-25 mx-auto mt-2 btn btn-danger">Delete</a>
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