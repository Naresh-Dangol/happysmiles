@extends('frontend.layout.master')  
  @section('content')
	
<!-- start about Area -->
@if(count($about) >0)
<section class="blog-area section-gap" id="about">
	<div class="container">
		
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10"><span class="welcome" style="color: #bf2928">WELCOME</span> {{strtoupper($about->caption)}}</h1>
					<hr>

				</div>
			</div>
		</div>					
		<div class="row">
			<div class="col-lg-6 col-md-6 img-blog" >
					<img src="{{asset('uploads/icon_image/'.$about->icon_image)}}" alt="" style="width: 100%;height:80%">	
			</div>
			<div class="col-lg-6 col-md-6 single-blog" >
				<div class="text">
					{!!$about->short_content!!}						
				</div>	
			</div>
			
		<div class="clearfix"></div>
		<div class="col-lg-12 col-md-12 text-center">
			<a href="{{$about->alias}}" class="btn btn-warning">Read More</a>
		</div>

	</div>	
</section>
<!-- End about Area -->	
@endif

<!-- start service Area -->

@if(count($services) > 0)
<section class="services section-gap" id="studyabroad" >
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">{{parent_caption($services[0]->parent_page_id)}} </h1>

				</div>
			</div>
		</div>
		<div class="service_inner">
			
			<ul class="row">
				@foreach($services as $service)
				<li class="col-sm-6 col-md-4">
					<a href="{{$service->alias}}">
						<div class="service_item equal_height">

							<img src="{{asset('uploads/icon_image/'.$service->icon_image)}}" alt="" height="50" width="50">

							<div class="service_desc">
								<h3>{{$service->nav_name}}</h3>
								<div class="text" style="">
									<p>{!!str_limit($service->short_content,150)!!}</p>
								</div>
							</div>
						</div>
					</a>
				</li>
				@endforeach


			</ul>    
			              
		</div>                     
	</div>
</section>
@endif


<!-- Study Abroad -->	
@if(count($study_abroad) > 0)
	<section class="blog-area section-gap" id="studyabroad">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">STUDY ABROAD</h1>
					</div>
				</div>
			</div>					
			<div class="row">
				@foreach($study_abroad as $study)
				<div class="col-xs-6 col-sm-6  col-md-6  col-lg-4  single-blog">
					<div class="thumb">
						<a href="{{$study->alias}}"><img class="img-fluid" src="{{asset('uploads/icon_image/'.$study->icon_image)}}" alt="{{$study->caption}}"></a>

						<div class="text-box ">
							<h3 class="text-center"><span style="color: #fff;">{{$study->caption}}</span></h3>
						</div>
					</div>				

				</div>
				@endforeach
										
			</div>
		</div>	
	</section>
	<!-- Study Abroad -->
@endif

						
	<!-- Start popular-course Area -->
	@if(count($testpreparations) > 0 )
	<section class="popular-course-area section-gap" style="background: #f9f9ff">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{parent_caption($testpreparations[0]->parent_page_id)}}</h1>

					</div>
				</div>
			</div>						
			<div class="row">
				<div class="active-popular-carusel">
					@foreach($testpreparations as $testpreparation)
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<a href="{{$testpreparation->alias}}"><img class="img-fluid" src="{{asset('uploads/icon_image/'.$testpreparation->icon_image)}}" alt="{{$testpreparation->caption}}"></a>
							</div>

						</div>
						<div class="details">
							<a href="{{$testpreparation->alias}}">
								<h4 class="text-center">
									{{$testpreparation->nav_name}}
								</h4>
							</a>
							<p style="text-align: justify;">
								{!!str_limit($testpreparation->short_content,120)!!}										
							</p>
						</div>
					</div>	
					@endforeach


				</div>
			</div>
		</div>	
	</section>

	@endif

<!-- Start abroad-study-procedure Area-->
@if(count($abroad_study_procedures) > 0)
	<section class="abroad_study_procedure section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{parent_caption($abroad_study_procedures[0]->parent_page_id)}}</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="abroad_study_slider">
					@foreach($abroad_study_procedures as $procedures)
					<div class="abroad_study_single">
						<a href="{{$procedures->alias}}">
							<div class="figure_wrapper" data-animation-in="slideInDown" data-animation-out="animate-out slideOutDown">
								<figure style="background-image:url({{asset('uploads/icon_image/'.$procedures->icon_image)}}">
									<img src="{{asset('uploads/icon_image/'.$procedures->icon_image)}}" style="width:100%" alt=""/>
								</figure>
								<div class="steps_count">
									<div class="steps_count_inner">
										<p>Step</p>
										<p>{{$procedures->icon_image_caption}}</p>
									</div>
								</div>
							</div>
							<div class="details" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">
									<h4 class="text-center">
										{{$procedures->nav_name}}
									</h4>
								<p>
									{!!$procedures->short_content!!}
								</p>
							</div>
						</a>
					</div>
					@endforeach

					


				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- End abroad-study-procedure Area -->

<!-- Start cta-one Area -->
<section class="cta-one-area relative section-gap">
<div class="container">
	<div class="overlay overlay-bg"></div>
	<div class="row justify-content-center">
		<div class="wrap">
			<h1 class="text-white">Make an Appointment</h1>
			<br>

			<a href="" data-toggle="modal" data-target=".register_pop_up" class="primary-btn wh">REGISTER</a>		

			@include('frontend.register')

		</div>	

				
	</div>
</div>	


</section>
<!-- End cta-one Area -->

	<!-- Start upcoming-event Area -->
	@if(count($upcoming_events) >0)
	<!-- Start upcoming-event Area -->
	<section class="upcoming-event-area section-gap" style="padding: 80px 0">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">{{parent_caption($upcoming_events[0]->parent_page_id)}} </h1>
						<p>{{parent_short_content($upcoming_events[0]->parent_page_id)}}</p>
					</div>
				</div>
			</div>	
									
			<div class="row">	
				<div class="active-upcoming-event-carusel">
					@foreach($upcoming_events as $events)	
					<div class="single-carusel row align-items-center">
						
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="{{asset('uploads/icon_image/'.$events->icon_image)}}" alt="" height="262" width="200">
						</div>
						<div class="detials col-12 col-md-6">
							<p>{!!$events->short_content!!}</p>
							<a href="{{$events->alias}}"><h4>{{$events->caption}}</h4></a>
							<p>
								{!!str_limit($events->long_content,150)!!}
							</p>
						</div>
						
					</div>
						@endforeach																			
				</div>
				
			</div>
			<div style="text-align: center;margin-top: 40px"><a href="{{parent_alias($upcoming_events[0]->parent_page_id)}} " class="primary-btn text-uppercase">View All</a></div>
		</div>	
	</section>
	<!-- End upcoming-event Area -->

	@endif
	<!-- End upcoming-event Area -->


<!-- Start review Area -->
@if(count($testimonials) > 0)
<section class="review-area section-gap relative" class="testimony-img" style="background-color: #f9f9ff" data-stellar-background-ratio="0.5">
<div class="row d-flex justify-content-center">
	<div class="menu-content pb-70 col-lg-8">
		<div class="title text-center">
			<h1 class="mb-10">{{parent_caption($testimonials[0]->parent_page_id)}}</h1>
			
		</div>
	</div>
</div>
<div class="overlay"></div>
<div class="container">
        <div class="row">
        	<div class="col-md-12">
           <!---->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						@foreach($testimonials as $key=>$testimonial)
						<div class="carousel-item {{$key==0?'active':''}}">
							<div class="test-slides">
								<div class="testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="{{asset('uploads/icon_image/'.$testimonial->icon_image)}}" alt=" " class="img-fluid"  height="60" width="60" />
										
									</div>
									<h3>{{$testimonial->nav_name}}
									</h3>
									<i>{{$testimonial->caption}}</i>
									<p>{{str_limit($testimonial->short_content,300)}}
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
						<span  class="fas fa-arrow-circle-left"></span>

						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
						<span  class="fas fa-arrow-circle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!---->
        </div>
        </div>
    </div>
</section>
@endif
<!-- End review Area -->
						
			@endsection	
		