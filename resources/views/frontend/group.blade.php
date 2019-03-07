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
                             @foreach($pages as $page) 
                                                                
                                <div class="col-lg-6 col-md-6 ">
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

                                            <figcaption class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{$page->alias}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure> 
                                        <div class="lower-content"> 
                                            <div class="text">
                                                <p>{!! $page->short_content !!}</p>               
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

                        <div class="col-lg-4 sidebar-widgets">
                            <div class="widget-wrap">
                                <!-- <div class="single-sidebar-widget search-widget">
                                    <form class="search-form" action="#">
                                        <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div> -->
                                


                                @if(listChild($page->parent_page_id) != null) 
                                <div class="single-sidebar-widget popular-post-widget">
                                    <h4 class="popular-title">{{parent_title($page->parent_page_id)}}</h4>
                                    <div class="popular-post-list">
                                        @foreach(listChild($page->parent_page_id) as $p)
                                        <div class="single-post-list d-flex flex-row align-items-center">
                                            
                                            <div class="details {{setActive($p->alias)}}">
                                            <a class="" href="{{$p->alias}}"><h6>{{$p->caption}}</h6></a>
                                                <!-- <p>02 Hours ago</p> -->
                                                
                                            </div>
                                            
                                        </div>
                                         @endforeach                                                        
                                    </div>
                                </div>
                               @endif
                               
                               <div class="single-sidebar-widget popular-post-widget">
                                    <a href="" data-toggle="modal" data-target=".register_pop_up" class="btn btn-danger btn-block">REGISTER NOW</a>
                                    @include('frontend.register')
                                </div>
                               
                               <div class="single-sidebar-widget ">
                                    @include('frontend.sidebar_events')
                                </div>
                              
                                                             
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

@endsection