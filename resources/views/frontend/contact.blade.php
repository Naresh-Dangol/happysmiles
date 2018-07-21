@extends('frontend.layout.master')

@section('content')
<div class="inner-banner text-center">
    <div class="container">
        <div class="box">
            <h3>Contact</h3>
        </div><!-- /.box -->
        <div class="breadcumb-wrapper">
            <div class="clearfix">
                <div class="pull-left">
                    <ul class="list-inline link-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
                
            </div><!-- /.container -->
        </div>
    </div><!-- /.container -->
</div>

<section class="contact_details sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-magnifying-glass"></span>
                    </div>
                    <h4>Visit Our Place</h4>
                    <div class="text">
                        <p>Happy Smiles Health Foundation, House no.137, Miteri Marga, Old Baneshwore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-clock"></span>
                    </div>
                    <h4>Office Schedule</h4>
                    <div class="text">
                        <p>Sunday to Friday: 09.00am to 18.00pm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="icon-telephone"></span>
                    </div>
                    <h4>Quick Contact</h4>
                    <div class="text">
                        <p>Ph: +01-4488170 <br>POBox no. 856<br>Email: info@happysmiles.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>





<section class="contact_us sec-padd-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3>Send Your Message Us</h3>
                </div>
                <div class="default-form-area">
                @if(Session::has('success'))
                    <div class="alert alert-success hidemsg">{{Session::get('success')}}</div>
                @endif 

                @if(Session::has('error'))
                    <div class="alert alert-danger hidemsg">{{Session::get('error')}}</div>
                @endif   


                    <form id="contact-form" name="contact_form" class="default-form" action="{{route('enquiries.send')}}" method="post" enctype="multiple/form-data">
                        {{csrf_field()}}
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn2" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-12">
                <div class="home-google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625948792!2d85.29111342263174!3d27.708955944454537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1531284673827" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    setTimeout(function(){$('.hide').slideUp();},2000);
</script>
@endsection