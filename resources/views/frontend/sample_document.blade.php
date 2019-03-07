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
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('assets/img/top-banner.jpg')
        }})">   
                <!--<div class="overlay overlay-bg"></div>-->
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                              Sample Document Form         
                            </h1>   
                            
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area --> 


<?php $sample_documents = App\Models\Navigation::where('parent_page_id',70)->where('page_status',1)->get();
    
 ?>
 
            <!-- Start post-content Area -->
            <section class="post-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 posts-list">
                            <div class="single-post row">
                               
                                @foreach($sample_documents as $document)
                               
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="course-holder preparation1 scroll-reveal"  style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 1s ease-in-out 0.1s, opacity 1s ease-in-out 0.1s; transition: transform 1s ease-in-out 0.1s, opacity 1s ease-in-out 0.1s; ">
                                        <a href="" data-toggle="modal" data-target=".register_pop_up{{$document->id}}" class="text-center">{{$document->nav_name}}</a>
                                    </div>

                        <div class="modal fade register_pop_up{{$document->id}}" tabindex="-1" role="dialog" aria-labelledby="admission">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                    <div class="admission_form">
                                        <h5>{{$document->nav_name}} Sample Form <span id="helpBlock" class="help-block">* required feild</span></h5>
                                        
                                        <form id="formRegister" method="post" action="{{url('/sample-document-form')}}">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <input type="hidden" id="training_program" name="title" value="{{$document->nav_name}}"/>
                                                <input type="hidden" id="document" name="attachment" value="{{$document->attachment}}"/>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="admission_fullname">Full Name<sup>*</sup></label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email Address<sup>*</sup></label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="contact">Contact Number<sup>*</sup></label>
                                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="textmess">Text</label>
                                                        <textarea class="form-control" name="message" id="textmess" rows="4" cols="6" placeholder="Enter Text"></textarea>
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                            <div id="status"></div>
                                            <button id="submit" type="submit" class="btn btn-warning">Submit</button>
                                        </form>
                                    </div><!-- / .admission_form -->
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
                                
                               <div class="single-sidebar-widget popular-post-widget">
                                    <a href="" data-toggle="modal" data-target=".register_pop_up" class="btn btn-danger btn-block">REGISTER</a>
                                    @include('frontend.register')
                                </div>
                                


                               
                                <div class="single-sidebar-widget popular-post-widget">
                                    @include('frontend.courses')
                                </div>
                                
                                <div class="single-sidebar-widget ">
                                     @include('frontend.sidebar_events')
                                </div>
                               
                               
                                                             
                            </div>
                        </div>
                        
                        
                    </div>
                </div>  
            </section>
            <!-- End post-content Area -->  
@endsection


