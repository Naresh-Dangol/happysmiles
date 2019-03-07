@extends('frontend.layout.master')
@section('css')
<style>
.downloads aside {
    border: 1px #DDD solid;
    padding: 10px;
    background: #FFF;
    margin: 0px;
    margin-top: 2em;
    border-radius: 5px;
    margin-bottom: 2em;
}
.downloads aside h2 {
    display: inline-block;
    font-size: 23px;
    margin: 0px;
    color: rgba(51, 51, 51, 0.75);
    line-height: 2em;
    font-family: 'PT Sans', sans-serif;
}

.downloads aside ul {
    display: inline-block;
    float: right;
    padding-top: 0.5em;
    padding-right: 1em;
}

.downloads aside ul li {
    display: inline-block;
    font-size: 23px;
    margin-left: 1em;
}
</style>
@stop

@section('content')
<div class="inner-banner text-center">
    <div class="container">
    	
        <div class="box">
           <h3>{{parent_caption($pages[0]->parent_page_id)}}</h3>
        </div><!-- /.box -->
        
        @include('frontend.breadcrumb')
    </div><!-- /.container -->
</div><!-- /.inner-banner -->

<div class="container">
	@foreach($pages as $page)
	<div class="downloads">
		<aside>
            <h2>{{$page->nav_name}}</h2>
                <ul>
                    <li><a title="download" download="{{asset('uploads/attachment_file/'.$page->attachment)}}" href="{{asset('uploads/attachment_file/'.$page->attachment)}}">
                    <i class="fa fa-download"></i></a></li>
                </ul>
        </aside><!--/ item -->
                               
                
    </div><!--/ downloads -->
    @endforeach
</div><!--/ container -->


@stop