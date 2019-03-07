@extends('frontend.layout.master')

@section('content')
@if(count($gallery)>0)
    <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">   
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                {{$gallery->nav_name}}             
                            </h1>   
                            @include('frontend.breadcrumb')
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->  
            @endif  
            
            @if(count($photos) > 0)    
            <!-- Start gallery Area -->
            <section class="gallery-area section-gap">
                <div class="container">
                    <div class="row">
                        @foreach($photos as $photo) 
                        
                        <div class="col-lg-4 col-md-4">
                            <a href="{{asset('uploads/photo_gallery/'.$photo->file)}}" class="img-gal">
                                <div class="single-imgs relative">      
                                    <div class="overlay overlay-bg"></div>
                                    <div class="relative">              
                                        <img class="img-fluid" src="{{asset('uploads/photo_gallery/'.$photo->file)}}" alt="{{$photo->file}}">     
                                    </div>
                                </div>
                            </a>
                        </div>      
                  @endforeach
                        
                    </div>
                </div>  
            </section>
            <!-- End gallery Area -->
                                                    

            

@endif
@endsection