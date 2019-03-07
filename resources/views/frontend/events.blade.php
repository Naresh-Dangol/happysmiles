@extends('frontend.layout.master')

@section('content')
<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)
        }})">   
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                {{parent_title($pages[0]->parent_page_id)}}               
                            </h1>   
                            
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->

            <!-- Start events-list Area -->
            <section class="events-list-area section-gap event-page-lists">
                <div class="container">
                    <div class="row">
                         @foreach($pages as $event)
                        <div class="col-lg-12 pb-30">
                           
                            <div class="single-carusel row">
                                <div class=" col-md-4 thumb">
                                    <a href="{{asset('uploads/icon_image/'.$event->icon_image)}}" class="img-gal">
                                    <img class="img-fluid" src="{{asset('uploads/icon_image/'.$event->icon_image)}}" alt=""></a>
                                </div>
                                <div class="detials  col-md-8">
                                    <p>{{$event->short_content}}</p>
                                    <a href="{{$event->alias}}"><h4>{{$event->caption}}
                                    </h4></a>
                                    <p>
                                        {!! $event->long_content!!}
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                                                                                            
                           
                    </div>
                </div>  
            </section>
            <!-- End events-list Area -->
           

          
 @endsection           