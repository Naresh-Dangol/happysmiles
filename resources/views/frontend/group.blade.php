@extends('frontend.layout.master')

@section('content')
<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>{{parent_caption($pages[0]->parent_page_id)}}</h3>
        </div><!-- /.box -->
        @include('frontend.breadcrumb')
    </div><!-- /.container -->
</div>

<section class="service style-2 sec-padd">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">

                <div class="service-sidebar">
            
            	@if(count($pages) > 0)
                   <ul class="service-catergory">  
                    @foreach($pages as $page)
                     <li><a href="{{$page->alias}}">{{ucfirst($page->nav_name)}}</a></li>
                  @endforeach
                   </ul>
                   @endif
                    
                    

                    <div class="contact-info2">
                        <h4>Contact Us</h4>
                        <div class="text">
                            <p>Please find below contact details <br>and contact us today! Our experts always ready to help you. </p>
                        </div>
                        <ul>
                            <li><i class="fa fa-phone"></i>Phone: +123-456-7890</li>
                            <li><i class="fa fa-envelope"></i><a href="#">Mailus@Experts.com</a></li>
                        </ul>
                        <a href="#" class="thm-btn">Get Free Quote</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="outer-box">
                    <div class="intro-img">
                        <div class="img-box">
                            <a href="#"><img src="{{asset('assets/frontend/images/service/7.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="text">
                        <p>{{parent_long_content($pages[0]->parent_page_id)}}</p>
                    </div>  
                   
                    
            
                </div>
            </div>

        </div>
    </div>
</section>

@endsection