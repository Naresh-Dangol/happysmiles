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
                            <a href="#"><img src="images/service/7.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="text">
                        <p>We work closely with Employers across all industry sectors to ensure that their internal sed Human Resource systems processes align to their business requirements idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth. Take a 360-degree sed view of yours situations using our seds deep experience, industries specialization and global reach.</p><br>
                        <p>Ensure that their internal sed Human Resource systems processes align to their business requirements idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                    </div>  
                    
            
                </div>
            </div>

        </div>
    </div>
</section>

@endsection