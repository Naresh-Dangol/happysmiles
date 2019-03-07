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
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)}})">     
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


            
           <?php $study_abroad = App\Models\Navigation::where('nav_category','Main')->where('parent_page_id',4)->where('page_status',1)->get(); ?>

           <!-- Study Abroad -->    
@if(count($study_abroad) > 0)
    <section class="blog-area section-gap" id="studyabroad">
        <div class="container">
                             
            <div class="row">
                @foreach($study_abroad as $study)
                <div class="col-lg-4 col-md-6 single-blog">
                    <div class="thumb">
                        <a href="{{$study->alias}}"><img class="img-fluid" src="{{asset('uploads/icon_image/'.$study->icon_image)}}" alt=""> </a>

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

                                
@endsection


