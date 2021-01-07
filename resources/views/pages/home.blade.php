@extends('template')
@section('pageTitle')
    Labs - Design Studio
@endsection
@section('content')
    <!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('images/bigIcon.png')}}" alt="">
				<p>{{$motoData->moto}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($carouselData as $carousel)
				<div class="item  hero-item" data-bg="{{asset('images/'.$carousel->src)}}"></div>
			@endforeach
		</div>
	</div>
    <!-- Intro Section -->
    <!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					@foreach ($quickServiceData as $quickService)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$quickService->icon}}"></i>
								</div>
								<h2>{{$quickService->title}}</h2>
								<p>{{$quickService->text}}</p>
							</div>
						</div>
						@if ($loop->iteration % 4 == 0)
							</div>
							<div class="row">
						@endif
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$start}}<span class="bg-success">{{$cut}}</span>{{$end}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$presentationData->text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentationData->text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="#contact" class="site-btn">{{$presentationData->btn}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="{{asset($videoData->img)}}" alt="">
							<a href="{{$videoData->src}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->


	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						@foreach ($testimonialsData as $testimonials)
							<!-- single testimonial -->
							<div class="testimonial">
								<span>‘​‌‘​‌</span>
								<p>{{$testimonials->text}}</p>
								<div class="client-info">
									<div class="avatar">
										<img src="{{asset('img/'.$testimonials->src)}}" alt="">
									</div>
									<div class="client-name">
										<h2>{{$testimonials->name}}</h2>
										<p>{{$testimonials->function}}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				@foreach ($serviceData as $service)
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<div class="icon">
								<i class="{{$service->icon}}"></i>
							</div>
							<div class="service-text">
								<h2>{{$service->title}}</h2>
								<p>{{$service->text}}</p>
							</div>
						</div>
					</div>
					@if ($loop->iteration % 3 == 0)
						</div>
						<div class="row">
					@endif
				@endforeach
				<div class="text-center">
					<a href="" class="site-btn">Browse</a>
				</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				@foreach ($teamsData as $teams)
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset("img/team/".$teams->src)}}" alt="" width="360" height="448">
							<h2>{{$teams->name}}</h2>
							<h3>{{$teams->function}}</h3>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="#contact" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	<div class="contact-section spad fix" id="contact">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$contactFormData->title}}</h2>
					</div>
					<p>{{$contactFormData->text}}</p>
					<h3 class="mt60">Main Office</h3>
					<p class="con-item">{{$contactFormData->adress}}</p>
					<p class="con-item">{{$contactFormData->phone}}</p>
					<p class="con-item">{{$contactFormData->mail}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form" action="/mail_sending" method="post">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name" name="first_name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email"  name="mail">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject"  name="subject">
								<textarea name="message" placeholder="Message"  name="message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
@endsection