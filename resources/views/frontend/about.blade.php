@extends('frontend.layout.master')

@section('content')
    <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)}})">   
                <!--<div class="overlay overlay-bg"></div>-->
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                {{ucfirst($page->nav_name)}}               
                            </h1>   
                           
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->    

            

            <!-- Start info Area -->
            <section class="info-area pb-120">
                <div class="container">
                    <div class="row align-items-center">

                       
            
                      
                       <!--  <div class="col-lg-6 no-padding info-area-left">
                            <img class="img-fluid" src="{{asset('assets/img/about-img.jpg')}}" alt="">
                        </div> -->

                        <div class="col-lg-12">
                            <h1 style="margin: 20px 0px;">Introduction</h1>
                            @if($page->long_content != "")
                            <p style="text-align: justify;">{!!$page->long_content!!}</p>
                            @endif        
                        </div>
                       
                    </div>
                </div>  
            </section>
            <!-- End info Area -->  

           
@endsection

