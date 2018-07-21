@extends('frontend.layout.master')
@section('content')
<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>{{parent_caption($page->parent_page_id)}}</h3>
        </div><!-- /.box -->
        @include('frontend.breadcrumb')
    </div><!-- /.container -->
</div>

<section class="default-section sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="">
                    <h3>{{$page->nav_name}}</h3><br>
                </div>
                <div class="text-content">
                   {!! $page->long_content !!}
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <figure class="img-box">
                    <a href="#"><img src="{{asset('uploads/icon_image/'.$page->icon_image)}}" alt="" height="220" width="400"></a>
                </figure>
            </div>
        </div>
    </div>
</section>


@endsection
