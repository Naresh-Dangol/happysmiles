<?php $side_events = App\Models\Navigation::where('parent_page_id','5')->get();
    
 ?>
<div class="popular_news"> 
    @if(count($side_events)>0)
            <div class="inner-title">
                <h4>Events</h4>
            </div>
    @foreach($side_events as $events)
            <div class="popular-post"> 
            <div class="item">
                
                <div class="post-thumb"><a href="#"><img src="{{asset('uploads/icon_image/'.$events->icon_image)}}" alt=""></a></div>
                    <a href="{{$events->alias}}"><h5> {{$events->nav_name}}</h5></a>
                 <div class="post-info"><i class="fa fa-calendar"></i>   {{$events->short_content}} </div>
                </div><!--/item-->
            @endforeach
            
        @endif
        </div>