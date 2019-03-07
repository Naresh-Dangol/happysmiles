@extends('frontend.layout.master')

@section('content')
<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>{{--parent_caption($albums[0]->parent_page_id)--}}</h3>
        </div><!-- /.box -->
        @include('frontend.breadcrumb')
    </div><!-- /.container -->
</div>

 <div>
                @foreach($albums as $page)
                   <ul class="service-catergory">  
                     <li><a href="{{URL::to('/')}}{{'/'}}{{$page->alias}}" class="{{Request::is($page->alias)?'active':''}}">{{ucfirst($page->nav_name)}}</a></li>
                  
                   </ul>
                   @endforeach
               </div>


@endsection