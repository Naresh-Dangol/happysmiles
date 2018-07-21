@extends('frontend.layout.master')

@section('content')
<section style="background: #f2f2f2;padding:30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-justify">      
                <h2 class="text-center">Welcome</h2><br>
                <p>{!!parent_long_content($abouts[0]->parent_page_id)!!}</p>
            </div>
        </div>
    </div>
</section>


<!-- About Us Section open-->
<section class="feature-service sec-padd2">
    <div class="container">
        <div class="row">
            @if(count($blogs) >0)
            @foreach($blogs as $blog)
            <div class="col-md-4 col-sm-12 column style-1">
                <div class="section-title">
                    <h3>{{$blog->nav_name}}</h3>
                </div>
                <figure class="img-box">
                    <a href="#"><img src="{{asset('uploads/icon_image/'.$blog->icon_image)}}" alt="blog images"></a>
                </figure>
                <div class="text">
                    <p>{!! $blog->short_content !!}</p>
                </div>
                <div class="link"><a href="details/{{$blog->alias}}" class="thm-btn-tr style-2">Know More</a></div>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>
<!-- About Us Section close-->
<!-- Programmes Section Open-->
<section class="service sec-padd2" style="background:#f2f2f2;">
    <div class="container">
        @if(count($programmes)>0)
        <div class="section-title">
            <h2>{{parent_caption($programmes[0]->parent_page_id)}}</h2>
        </div>

        <div class="service_carousel">
            @foreach($programmes as $program)
            <!--Featured Service -->
            <article class="single-column">
                <div class="item">
                    <figure class="img-box">
                        <img src="{{asset('uploads/icon_image/'.$program->icon_image)}}" alt="" width="420" height="161">
                        <figcaption class="default-overlay-outer">
                            <div class="inner">
                                <div class="content-layer">
                                    <a href="details/{{$program->alias}}" class="thm-btn thm-tran-bg">read more</a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="content center">
                        <a href="service-1.html"><h4>{{$program->caption}}</h4></a>
                        <div class="text">
                            <p>{!! str_limit($program->long_content,120) !!}</p>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach    

        </div>
        @endif
    </div>
</section>
<!-- Programmes Section close-->

<!-- News & Events Section Open-->
<section class="blog-section sec-padd2">
    <div class="container">
        @if(count($events) > 0 )
        <div class="section-title center">
            <h2>{{parent_title($events[0]->parent_page_id)}}</h2>
        </div>
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <figure class="img-holder">
                        <a href="{{asset('uploads/icon_image/'.$event->icon_image)}}"><img src="{{asset('uploads/icon_image/'.$event->icon_image)}}" alt="News" width="420" height="261"></a>
                        <figcaption class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="lower-content">
                        <div class="date">{{$event->updated_at->format('d-m-Y')}}</div>
                        <h4><a href="blog-details.html">{{$event->nav_name}}</a></h4>
                        
                        <div class="text">
                            <p>{!! $event->short_content !!}</p>
                        </div>
                        <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
<!-- News & Events Section close-->

<!-- Photo Gallery Section Open -->
<section class="latest-project photo-gallery sec-padd2" style="background:#f2f2f2;">
    <div class="container">
        @if(count($galleries) > 0)
        <div class="section-title">
            <h2>Photo Gallery</h2>
        </div>
        <div class="latest-project-carousel">
            @foreach($galleries as $gallery)
            <div class="item">
                <div class="">
                  <a data-fancybox="gallery" href="{{asset('uploads/photo_gallery/'.$gallery->file)}}" class="pop-up-hover">
                        <img src="{{asset('uploads/photo_gallery/'.$gallery->file)}}" alt="Awesome Image" width="263" height="163" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    @endif
    </div>
</section>
<!-- Photo Gallery Section Close -->

<!-- Video Gallery Section Open -->
<section class="latest-project video-gallery sec-padd2" style="background:#ffffff;">
    <div class="container">
        <div class="section-title">
            <h2>Video Gallery</h2>
        </div>

        <div class="latest-project-carousel">
            @foreach($videos as $video)
            <div class="item">
                <div class="single-project" style="margin-right: 20px">
                  {!! Embed::make($video->vlink)->setAttribute(['width'=> 300]) ->parseUrl()->getIframe()!!};
                  
                </div>
                
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Video Gallery Section Close -->

<section class="clients-section sec-padd" style="background:#f2f2f2;">
    <div class="container">
        @if(count($partners) > 0)
        <div class="section-title">
            <h2>our partners</h2>
        </div>
        <div class="client-carousel owl-carousel owl-theme">
            @foreach($partners as $partner)
            <div class="item tool_tip" title="media partner">
                <img src="{{asset('uploads/photo_gallery/'.$partner->file)}}" alt="Awesome Image">
            </div>
            @endforeach
            

        </div>
        @endif
    </div>
</section>
@endsection
