<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">

                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h3 class="footer-title">Contact us</h3>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        @if(count($footers) > 0)
                                        @foreach($footers as $footer)
                                            <li>@php($icons = config('options')['icons'])<span class="{{$icons[$footer->alias]}}"></span>{{$footer->caption}}</li>
                                        @endforeach
                                        @endif
                                        <!-- <li><span class="icon-signs"></span>22/121 Apple Street, New York, <br>NY 10012, USA</li>
                                        <li><span class="icon-phone-call"></span> Phone: +123-456-7890</li>
                                        <li><span class="icon-e-mail-envelope"></span>info@happysmiles.com</li> -->
                                    </ul>
                                </div>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                @if(count($links) > 0)
                                <h3 class="footer-title">Useful Links</h3>
                                <div class="widget-content">
                                    <ul class="list">
                                        @foreach($links as $link)
                                        <li><a href="{{$link->alias}}">{{$link->nav_name}}</a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                @endif
                            </div>
                        </div>


                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                            <div class="footer-widget news-widget">
                                <h3 class="footer-title">Newsletter</h3>
                                <div class="widget-content">
                                    <!--Post-->
                                    <div class="text"><p>Sign up today for hints, tips and the <br>latest product news</p></div>
                                    <!--Post-->
                                    <form action="{{route('subscriber')}}" class="default-form" method="post">
                                        {{csrf_field()}}
                                        <input type="email" name="email" placeholder="Email Address">
                                        <button type="submit" class="thm-btn">Subscribe Us</button>
                                    </form>
                                </div>

                            </div>
                        </div>

             </div>
         </div>
     </div>

     <!--Footer Bottom-->
     <section class="footer-bottom">
        <div class="container">
            <div class="pull-left copy-text">
                <p>Copyrights © 2017 All Rights Reserved. Powered by  <a href="#"> Radiant Infotech nepal.</a></p>

            </div><!-- /.pull-right -->
            <div class="pull-right get-text">
                <ul>
                    <li><a href="#">Support |  </a></li>
                    <li><a href="#">Privacy & Policy |</a></li>
                    <li><a href="#"> Terms & Conditions</a></li>
                </ul>
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </section>

</footer>

<!-- Scroll Top Button -->
    <button class="scroll-top tran3s color2_bg">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- pre loader  -->
    <div class="preloader"></div>




</div>

<!-- jQuery js -->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- jQuery ui js -->
    <script src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <!-- jQuery validation -->
    <script src="{{asset('assets/frontend/js/jquery.validate.min.js')}}"></script>

    <!-- mixit up -->
    <script src="{{asset('assets/frontend/js/wow.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/menuzord.js')}}"></script>

    <!-- revolution slider js -->
    <script src="{{asset('assets/frontend/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/revolution.extension.video.min.js')}}"></script>

    <!-- fancy box -->
    <script src="{{asset('assets/frontend/js/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('assets/frontend/js/nouislider.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('assets/frontend/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('assets/frontend/js/imagezoom.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
    <script id="map-script" src="{{asset('assets/frontend/js/default-map.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.bxslider.js')}}"></script>
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
    

    @yield('scripts')

    
    



    
</body>
</html>
