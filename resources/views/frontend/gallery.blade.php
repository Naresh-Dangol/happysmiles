@extends('frontend.layout.master')

@section('content')
<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>{{parent_caption($galleries[0]->parent_page_id)}}</h3>
        </div><!-- /.box -->
        @include('frontend.breadcrumb')
    </div><!-- /.container -->
</div>

<section class="blog-section sec-padd">
    <div class="container">

        <div class="row">
            @if(count($galleries) > 0 )
            @foreach($galleries as $gallery)

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                   
                    
                        <h4><a href="blog-details.html">{{$gallery->nav_name}}</a></h4>
                        <!-- <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>               
                        </div> -->
                        <!-- <div class="link">
                            <a href="blog-details.html" class="default_link">Read More <i class="fa fa-angle-right"></i></a>
                        </div> -->
                        
                    
                </div>    
            </div>
            @endforeach
    
            @endif
           
            
        </div>

        <ul class="page_pagination center">
            <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li><a href="#" class="active tran3s">1</a></li>
            <li><a href="#" class="tran3s">2</a></li>
            <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
        </ul>

    </div>
</section>


@endsection