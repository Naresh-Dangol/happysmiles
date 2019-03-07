
<!-- start footer Area -->      
<footer class="footer-area section-gap">
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h4>Test Preparation</h4>
                @if(count($courses)>0)
                <ul>
                    @foreach($courses as $course)
                    <li><a href="{{$course->alias}}">{{$course->nav_name}}</a></li>
                    @endforeach
                </ul>   
                @endif                            
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h4>Quick links</h4>
                @if(count($footerlinks) >0)
                <ul>
                    @foreach($footerlinks as $links)
                        @if($links->alias !='our-services')
                        <li><a href="{{$links->alias}}">{{$links->nav_name}}</a></li>
                        @endif
                    @endforeach
                </ul> 
                @endif                              
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h4>SERVICES</h4>
                @if(count($services) > 0)
                <ul>
                    @foreach($services as $service)
                    <li><a href="{{$service->alias}}">{{$service->nav_name}}</a></li>
                    @endforeach
                </ul>       
                @endif                        
            </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h4>Newsletter</h4>
                @if(Session::has('success'))
                    <div class="alert alert-success hidemsg">{{Session::get('success')}}</div>
                    @endif 

                    @if(Session::has('error'))
                        <div class="alert alert-danger hidemsg">{{Session::get('error')}}</div>
                    @endif 
                <p>Stay update with our latest Course</p>
                <div class="" id="mc_embed_signup">
                    <form action="{{route('subscriber')}}" method="post">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="lnr lnr-arrow-right"></span>
                                </button>    
                            </div>
                            <div class="info"></div>  
                        </div>
                    </form> 
                </div>
            </div>
        </div>                                          
    </div>
    <div class="footer-bottom row align-items-center justify-content-between">
        <p class="footer-text m-0 col-lg-6 col-md-12">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  powered by <a href="https://radiantnepal.com" target="_blank">Radiant InfoTech Nepal</a>
        </p>

        @if(count($socials)>0)
        <div class="col-lg-6 col-sm-12 footer-social">
            @foreach($socials as $social)
            <a href="{{$social->link}}"><i class="fab fa-{{strtolower($social->caption)}}"></i></a>
            @endforeach
        </div>
        @endif
    </div>                      
</div>
</footer>   
<!-- End footer Area -->    


<script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>          
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('assets/js/easing.min.js')}}"></script>            
<script src="{{asset('assets/js/hoverIntent.js')}}"></script>
<script src="{{asset('assets/js/superfish.min.js')}}"></script> 
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{asset('assets/js/jquery.tabs.min.js')}}"></script>                       
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>    
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>                                  
<script src="{{asset('assets/js/mail-script.js')}}"></script>   
<script src="{{asset('assets/js/wow.min.js')}}"></script>  
<script src="{{asset('assets/js/main.js')}}"></script>  

<script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items:5,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->

    @yield('script')
</body>
</html>