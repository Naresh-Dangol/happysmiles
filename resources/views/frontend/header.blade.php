<!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/fav_icon.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>EasyLink Career Consultant</title>

    <link href="https://fonts.googleapis.com/css?family=arial:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">              
      <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">     
      <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">      
      <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
       <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

      @yield('css')
      
    </head>
    <body>  
    
      <header id="header" id="home">
        <div class="header-top">
          <div class="container">
            <div class="row abced">
              @if(count($socials)>0)
              <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                <ul>
                  @foreach($socials as $social)
                  <li><a href="{{$social->link}}"><i class="fab fa-{{strtolower($social->caption)}}"></i></a></li>
                  @endforeach
                </ul>     
              </div>
              @endif

              @if(count($topheaders)>0)
              <div class="col-lg-4 col-sm-6 header-top-right no-padding">
                @foreach($topheaders as $topheader)
                <a href="{{$topheader->link}}"><span class="fa fa-{{strtolower($topheader->caption)}}"></span> <span class="text">{{$topheader->short_content}}</span></a>
               @endforeach   
               <?php $sample_documents = App\Models\Navigation::where('parent_page_id',70)->where('page_status',1)->get();?>
              </div>
              @endif
              <div class="dropdown">
                  <a href="{{url('/sample-document')}}" class="btn btn-sm btn-warning">
                        {{parent_title($sample_documents[0]->parent_page_id)}} 
                </a>
                  <div class="dropdown-content">
                    @foreach($sample_documents as $document)
                    <a>{{$document->nav_name}}</a>
                    @endforeach
                  </div>
                </div>

            </div>                  
          </div>
        </div>
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="{{url('/')}}"><img src="{{asset('assets/img/easylink-logo.png')}}" style="height:50px;width:210px;" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                @foreach($navigations as $navigation)
                  @if($navigation->parent_page_id==0)
                    @if(checkChild($navigation->id) ==0)
                      <li class="{{ setActive($navigation->alias)}}"><a  href="{{URL::to('/')}}{{'/'}}{{$navigation->alias}}">{{$navigation->nav_name}}</a></li>

                      @else
                      <li class="{{ setActive($navigation->alias)}} menu-has-children"><a  href="{{URL::to('/')}}{{'/'}}{{$navigation->alias}}">{{$navigation->nav_name}}</a>
                          @if(count(listChild($navigation->id)) > 0)
                            <ul>
                              @foreach(listChild($navigation->id) as $childNav)
                                  <li class=""><a href="{{URL::to('/')}}{{'/'}}{{$childNav->alias}}">
                                    {{ucfirst($childNav->nav_name)}} @if(checkChild($childNav->id) !=0) @endif<i class="fa fa-angle-side"></i>
                                  </a>
                                  @if(count(child($childNav->id)) > 0)
                                      <ul>
                                          @foreach(child($childNav->id) as $child)
                                            <li>
                                                <a href="{{$child->alias}}">{{ucfirst($child->nav_name)}}</a>
                                            </li>
                                            @endforeach
                                      </ul>
                                  @endif
                                </li>
                              @endforeach
                            </ul>
                          @endif
                      </li>
                    @endif
                  @endif
                @endforeach
                
                </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->