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

<section class="blog-section sec-padd">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="{{asset('assets/frontend/images/blog/1.jpg')}}" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <h4><a href="blog-details.html">Album One</a></h4>
                        <!-- <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>               
                        </div> -->
                        <!-- <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                        </div> -->
                        
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="blog-details.html"><img src="{{asset('assets/frontend/images/blog/1.jpg')}}" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <h4><a href="blog-details.html">Album Two</a></h4>
                        <!-- <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>               
                        </div> -->
                        <!-- <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                        </div> -->
                        
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                       <a href="blog-details.html"><img src="{{asset('assets/frontend/images/blog/1.jpg')}}" alt="News"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <h4><a href="blog-details.html">Album Three</a></h4>
                        <!-- <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>               
                        </div> -->
                        <!-- <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                        </div> -->
                        
                    </div>
                </div>
                
            </div>
            
        </div>

        <ul class="page_pagination center">
            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active tran3s">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

    </div>
</section>

<div class="call-out">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <figure class="logo">
                    <a href="index.html"><img src="images/logo/logo2.png" alt=""></a>
                </figure>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="float_left">
                    <h4>Over 20 years of experience we’ll ensure you get the best guidance.</h4>
                </div>
                <div class="float_right">
                    <a href="contact.html" class="thm-btn-tr">Request Quote</a>
                </div>
            </div>
        </div>
                
    </div>
</div>
@endsection