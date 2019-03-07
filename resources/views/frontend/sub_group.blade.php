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
                        <div class="col-lg-8 posts-list">
                            <div class="single-post row">                               
                                <div class="col-lg-12 col-md-12 ">
                                    <div class="single-post row">
                             @foreach($pages as $page) 
                                                                
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="default-blog-news wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                                        <h3> {{$page->caption}} </h3>
                                        
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

                        <div class="col-lg-4 sidebar-widgets">
                            <div class="widget-wrap">
                                 
                                <!-- <div class="single-sidebar-widget search-widget">
                                    <form class="search-form" action="#">
                                        <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div> -->

                               <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="popular-title">{{$parent->nav_name}}</h4>
                                    <div class="popular-post-list">
                                        @foreach($pages as $page)
                                        <div class="single-post-list d-flex flex-row align-items-center">
                                            
                                            <div class="details {{setActive($page->alias)}}">
                                                <a class="" href="{{$page->alias}}"><h6>{{$page->nav_name}}</h6></a>
                                                <!-- <p>02 Hours ago</p> -->
                                
                                            </div>
                                            
                                
                                        </div>
                                             @endforeach                                                   
                                    </div>
                                    
                                </div>
                                
                                <div class="single-sidebar-widget popular-post-widget">
                                    <a href="" data-toggle="modal" data-target=".register_pop_up" class="btn btn-danger btn-block">REGISTER NOW</a>
                                    @include('frontend.register')
                                </div>
                                
                                <div class="single-sidebar-widget">
                                    @include('frontend.sidebar_events')
                                </div>
                                
    
                             
                               
                                                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection