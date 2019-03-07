@extends('frontend.layout.master')

@section('content')


<section class="default-section sec-padd">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h2 class="section-title">{{$pages->nav_name}}</h2>
                <div class="text-content">
                   {!! $pages->short_content !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <figure class="img-box">
                    <a href="#"><img src="{{asset('uploads/icon_image/'.$pages->icon_image)}}" width="300" alt=""></a>
                </figure>
            </div>
        </div>
    </div>
</section>

@endsection