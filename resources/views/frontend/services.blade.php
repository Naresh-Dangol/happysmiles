@extends('frontend.layout.master')

@section('content')
<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)}})">   
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



<!-- Start top-category-widget Area -->
               
            <section class="top-category-widget-area pt-90 pb-90 ">
                <div class="container">
                   <div class="row">  
                   @foreach($pages as $service)      
                        <div class="col-lg-4">
                            <div class="single-cat-widget">
                                <div class="content relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="{{$service->alias}}">
                                      <div class="thumb">
                                         <img class="content-image img-fluid d-block mx-auto" src="{{asset('uploads/icon_image/'.$service->icon_image)}}" alt="">
                                      </div>
                                      <div class="content-details">
                                        <h4 class="content-title mx-auto text-uppercase">{{$service->caption}}</h4>
                                        <span></span>                                       
                                        <p>{{str_limit($service->short_content,40)}}</p>
                                      </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                         @endforeach                                            
                    </div>
                
                </div>  
            </section>
            

@endsection