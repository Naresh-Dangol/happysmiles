@extends('frontend.layout.master')
@section('css')
<style>
    .map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    margin-bottom: 30px;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;

}
</style>
@endsection

@section('content')
<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home" style="background: url({{asset('uploads/banner_file/'.$page->banner_image)}})">   
                <!--<div class="overlay overlay-bg"></div>-->
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                {{$page->nav_name}}             
                            </h1>   
                            
                        </div>  
                    </div>
                </div>
            </section>
            <!-- End banner Area -->                  

            <!-- Start contact-page Area -->
            <section class="contact-page-area ">
                <div class="container">
                    
                    <div class="row">
                        <div class="map-responsive" style="width: 100%">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.378819895947!2d85.32134401453828!3d27.70558773217722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198d68050fa7%3A0x8ef7297a2d6e1c01!2sEasyLink+Career+Consultants!5e0!3m2!1sen!2snp!4v1548174653917" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                        <div class="col-lg-12 col-md-12" style="padding:20px 10px">
                            <h3>EasyLink Career Consultant Pvt.Ltd</h3>
                        </div>
                        
                        <?php $contact_details = App\Models\Navigation::where('parent_page_id',78)->where('page_status',1)->get(); ?>
                        
                        <div class="col-lg-4 d-flex flex-column address-wrap">
                            @foreach($contact_details as $detail)
                            <div class="single-contact-address d-flex flex-row">
                                <div class="icon">
                                    <span class="lnr {{$detail->icon_image_caption}}"></span>
                                </div>
                                <div class="contact-details">
                                    <h5>{!!$detail->short_content!!}</h5>
                                    <p>
                                        {{$detail->caption}}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            @if(count($socials)>0)
                                <div class="contact-social contact-details">
                                    @foreach($socials as $social)
                                    <a href="{{$social->link}}"><i class="fab fa-{{strtolower($social->caption)}}"></i></a>
                                    @endforeach
                                </div>
                                @endif
                            
                        </div>
                        <div class="col-lg-8">
                            @if(Session::has('success'))
                            <div class="alert alert-success hidemsg">{{Session::get('success')}}</div>
                            @endif 

                            @if(Session::has('error'))
                                <div class="alert alert-danger hidemsg">{{Session::get('error')}}</div>
                            @endif   

                            <form method="post" class="form-area contact-form text-right" action="{{route('enquiries.send')}}" >
                                {{csrf_field()}}
                                <div class="row">   
                                    <div class="col-lg-6 form-group">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                    
                                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                        <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>               
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="alert-msg" style="text-align: left;"></div>
                                        <button type="submit" class="genric-btn primary" style="float: right;margin-bottom: 10px">SEND MESSAGE</button>                                         
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End contact-page Area -->


@endsection

@section('scripts')
<script>
    setTimeout(function(){$('.hide').slideUp();},2000);
</script>
@endsection