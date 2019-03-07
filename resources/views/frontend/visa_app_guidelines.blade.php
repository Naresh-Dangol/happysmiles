@extends('frontend.layout.master')

@section('content')
<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)}})">   
                <!--<div class="overlay overlay-bg"></div>-->
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

             <!-- Start post-content Area -->
            <section class="post-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 posts-list">
                            <div class="single-post row">                               
                                <div class="col-lg-12 col-md-12 ">
                                    <div class="single-post row">
                                        <p style="text-align:destination">{!!$parent->long_content!!}</p>
                             @foreach($pages as $page) 
                                                                
                                <div class="col-lg-4 col-md-4 ">
                                    <div class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <h3> {{$page->caption}} </h3>
                                        <figure class="img-holder">
                                            <a href="{{$page->alias}}">
                                                @if($page->icon_image !="")
                                                    <img src="{{asset('uploads/icon_image/'.$page->icon_image)}}" alt="{{$page->icon_image}}" height="200"> 
                                                    @else
                                                    <img src="{{asset('uploads/default.jpg')}}" alt="{{$page->icon_image}}" height="200"> 
                                                @endif
                                                            
                                            </a>

                                            
                                        </figure> 
                                        <div class="lower-content"> 
                                            <div class="text">
                                                <p>{!! str_limit($page->long_content,150) !!}</p>               
                                            </div>
                                            <div class="link">
                                                <a href="{{$page->alias}}" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                                            </div>    
                                        </div>
                                    </div>  
                                </div>
                                @endforeach   

                            </div>   
                                </div>
                            </div>                                                                      
                        </div>

                        
                    </div>
                </div>
            </section>
@endsection