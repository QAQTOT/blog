<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verb &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="GetTemplates.co" />

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
    <script src="{{URL::asset('/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{URL::asset('/js/respond.min.js')}}"></script>
    <!-- jQuery -->
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{URL::asset('/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{URL::asset('/js/jquery.waypoints.min.js')}}"></script>
    <!-- Stellar -->
    <script src="{{URL::asset('/js/jquery.stellar.min.js')}}"></script>
    <!-- Main -->
    <script src="{{URL::asset('/js/main.js')}}"></script>
</head>
<body>

<div class="gtco-loader"></div>

<div id="page">
    @yield('head')
    @yield('content')
<footer id="gtco-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <h3 class="footer-heading">最新发布</h3>
                </div>
                @foreach($mostpop as $k => $v)
                <div class="col-md-4">
                    <div class="post-entry">
                        <div class="post-img">
                            <a href="#"><img src="{{URL::asset('/images/img_'.($k+1).'.jpg')}}" class="img-responsive" alt="{{$v->post_title}}"></a>
                        </div>
                        <div class="post-copy">
                            <h4><a href="#">{{$v->post_title}}</a></h4>
                            <a href="#" class="post-meta"><span class="date-posted">{{$v->post_date->diffForHumans()}}</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<div class="col-md-4">--}}
                    {{--<div class="post-entry">--}}
                        {{--<div class="post-img">--}}
                            {{--<a href="#"><img src="images/img_2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>--}}
                        {{--</div>--}}
                        {{--<div class="post-copy">--}}
                            {{--<h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>--}}
                            {{--<a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="post-entry">--}}
                        {{--<div class="post-img">--}}
                            {{--<a href="#"><img src="images/img_3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by GetTemplates.co"></a>--}}
                        {{--</div>--}}
                        {{--<div class="post-copy">--}}
                            {{--<h4><a href="#">How Web Hosting Can Impact Page Load Speed</a></h4>--}}
                            {{--<a href="#" class="post-meta"><span class="date-posted">4 days ago</span></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.More Templates  - Collect from </small>
                    </p>
                    <p>
                    <ul class="gtco-social-icons">
                        <li><a href="#"><i class="icon-qq"></i></a></li>
                        <li><a href="#"><i class="icon-sina-weibo"></i></a></li>
                        <li><a href="#"><i class="icon-mail"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
</body>
</html>