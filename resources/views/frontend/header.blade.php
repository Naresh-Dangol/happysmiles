<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name','Happy Smile Health Foundation')}}</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.fancybox.css')}}" />
    

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/frontend/images/fav-icon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/fav-icon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('assets/frontend/images/fav-icon/favicon-16x16.png')}}" sizes="16x16">



</head>
<body>

<div class="boxed_wrapper">

<header class="top-bar">
    <div class="container">
        <div class="clearfix">
            <div class="col-left float_left">
                  <ul class="social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  </ul>
                <ul class="top-bar-info">
                    @if(count($topheaders) > 0)
                    @foreach($topheaders as $topheader)
                    <li>
                        @php($icons = config('options')['icons'])
                        <i class="{{$icons[$topheader->alias]}}"></i>{{$topheader->caption}}</li>
                    @endforeach
                    @endif
                   <!--  <li><i class="icon-note2"></i>Mailus@TheExperts.com</li> -->
                </ul>
            </div>
            <div class="col-right float_right">
                <div class="link volunteer">
                    <a href="#" class="thm-btn">Volunteer</a>
                </div>
                <div class="link">
                    <a href="#" class="thm-btn">Donate</a>
                </div>
            </div>


        </div>


    </div>
</header>

<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
                <div class="main-logo">
                    <a href="index.html"><img src="{{asset('uploads/icons/1530688339_logo-1.png')}}" alt=""></a>
                </div>
                
            </div>
            <div class="col-md-9 menu-column">
                <nav class="menuzord" id="main_menu">
                   <ul class="menuzord-menu">
                    @if(count($navigations) > 0)
                        @foreach($navigations as $navigation)
                            @if($navigation->parent_page_id == 0)
                            @if(checkChild($navigation->id) == 0)
                                <li class="{{ setActive($navigation->alias)}}">
                                    <a href="{{URL::to('/')}}{{'/'}}{{$navigation->alias}}">{{$navigation->nav_name}}</a>
                                </li>
                                @else
                                <li class="{{ setActive($navigation->alias)}}"><a href="{{URL::to('/')}}{{'/'}}{{$navigation->alias}}">{{$navigation->nav_name}}</a>
                                    @if(count(listChild($navigation->id)) > 0)
                                    <ul class="dropdown">
                                        @foreach(listChild($navigation->id) as $childNav)
                                        <li class="{{ setActive($navigation->alias)}}"><a href="{{URL::to('/')}}{{'/'}}{{$childNav->alias}}">{{$childNav->nav_name}} @if(checkChild($childNav->id) != 0) @endif <i class="fa fa-angle-side"></i></a>
                                        <!-- @if(count(child($childNav->id)) > 0)
                                                <ul>
                                                    @foreach(child($childNav->id) as $child)
                                                    <li>
                                                        <a href="{{$child->alias}}">{{$child->alias}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            @endif       -->
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endif
                            @endif
                        @endforeach

                    @endif
                       <!--  <li class="active"><a href="index.html">Home</a></li>

                        <li><a href="#">Introduction</a>
                        <ul class="dropdown">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="team.html">Meet Our Team</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                            <li><a href="testimonials.html">Client Feedback</a></li>
                         </ul>
                        </li>

                        <li><a href="service.html">Programmes</a>
                        <ul class="dropdown">
                            <li><a href="service-1.html">Business Growth</a></li>
                            <li><a href="service-2.html">Sustainability</a></li>
                            <li><a href="service-3.html">Performance</a></li>
                            <li><a href="service-4.html">Advanced Analytics</a></li>
                            <li><a href="service-5.html">Organization</a></li>
                            <li><a href="service-6.html">Customer Insights</a></li>
                         </ul>

                        </li>
                        <li><a href="#">News/Media</a>
                        <ul class="dropdown">
                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                            <li><a href="blog-large.html">Blog With Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Single Post</a></li>
                         </ul>
                        </li>
                        <li><a href="#">Gallery</a>
                        <ul class="dropdown">
                            <li><a href="project-1.html">Projects 4 Columns</a></li>
                            <li><a href="project-2.html">Projects 3 Columns</a></li>
                            <li><a href="project-3.html">Projects 2 Columns</a></li>
                            <li><a href="project-single.html">Single Project</a></li>
                         </ul>
                        </li>

                        <li><a href="contact.html">Contact us</a></li> -->
                    </ul><!-- End of .menuzord-menu -->
                </nav> <!-- End of #main_menu -->
            </div>
            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                        <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="{{route('page_search')}}" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" id="search" placeholder="Search...">
                                <button><i class="fa fa-search icon" aria-hidden="true"></i></button>
                            </form>

                            
                       </div>
                   </div>
                </div>

            </div>
        </div>


   </div> <!-- End of .conatiner -->
</section>