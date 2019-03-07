@extends('frontend.layout.master')

@section('css')
 <style>
              .single-post-list .active a {
                color: #f7631b;
              }

            </style>
@endsection

@section('content')
<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)
        }})">   
                <!--<div class="overlay overlay-bg"></div>-->
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                              {{parent_title($page->id)}}     
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
                                    
                                    <h3>{!!$page->caption!!}</h3>
                                    <p class="excert" style="text-align: justify;">
                                        {!! $page->long_content !!}
                                    </p> 
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
                                    <!--<h3><span>&nbsp;</span></h3>-->
                                    
                                @if(listChild($page->parent_page_id) != null)        
                                    <div class="popular-post-list">
                                   
            
                                      @foreach(listChild($page->parent_page_id) as $p)
                                      <div class="single-post-list d-flex flex-row align-items-center">
                                           <div class="details">
                                            <a class="" href="{{$p->alias}}"><h6 class="{{setActive($p->alias)}}">{{$p->nav_name}}</h6></a>
                                            <!-- <p>02 Hours ago</p> -->
                            
                                        </div>
                                     
                                      </div>
                                      @endforeach
            
                                    </ul>
                                    </div>
                                    @endif 
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
            <!-- End post-content Area -->  
@endsection


