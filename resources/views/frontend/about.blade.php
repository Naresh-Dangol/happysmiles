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

<section class="default-section sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="text-content">
                   {!! $parent->long_content !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="img-box">
                    <a href="#"><img src="{{asset('uploads/banner_file/'.$parent->banner_image)}}" alt=""></a>
                </figure>
            </div>
        </div>
    </div>
</section>



<section class="our-history sec-padd-top">
    <div class="container">
        <div class="section-title center">
            <h2>Focus Period</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slider-pager">
                    <ul class="list-inline thumb-box style2">

                        <li>
                            <a class="active" data-slide-index="0" href="#">2017-2019</a>
                        </li>
                        

                    </ul>
                </div>    
            </div>
            <div class="col-md-1 col-sm-2 col-xs-2">
                <div class="slider-pager"> 
                    <ul class="list-inline thumb-box style1">
                        <li>
                            <a class="active" data-slide-index="0" href="#">Jan 14</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-md-11 col-sm-10 col-xs-10">
               
                <ul class="bxslider ">
                    <li>
                        <div class="clearfix">
                            <figure class="img-box pull-left">
                                <a href="#"><img src="{{asset('uploads/icons/1530783583_logo-1.png')}}" alt="" height="315" width="470"></a>
                            </figure>
                            <div class="content">
                                <h4>Best Service</h4>
                                <!-- <p class="theme-color">21st January 1975</p> -->
                                <div class="text">
                                    <p>The main focus during this period will be on Oral health of the most vulnerable populations of Nepal which can be achieved by increasing the number of existing programmes and reaching out to the unreached communities.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                    
                                        
                </ul>
                <div class="slider-pager">
                    <div class="center">
                        <ul class="nav-link list-inline">
                            <li id="slider-prev"></li>
                            <li id="slider-next"></li>
                        </ul>  
                    </div>
                    
                </div>
            </div>
                
        </div>         
    </div>
</section>
 






@endsection

