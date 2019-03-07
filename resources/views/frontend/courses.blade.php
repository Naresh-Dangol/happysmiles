<?php $courses = App\Models\Navigation::where('parent_page_id',11)->where('page_status',1)->get();?>

<h4 class="popular-title">{{parent_caption($courses[0]->parent_page_id)}}</h4>
    <div class="popular-post-list">
        @foreach($courses as $course)
        <div class="single-post-list d-flex flex-row align-items-center">
            
            <div class="details {{setActive($course->alias)}}">
                <a class="" href="{{$course->alias}}"><h6>{{$course->nav_name}}</h6></a>
                <!-- <p>02 Hours ago</p> -->

            </div>
            

        </div>
             @endforeach                                                   
    </div>
    