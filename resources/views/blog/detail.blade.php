@extends('blog.public')
@section('head')
    @extends('blog.menu')
    @section('menu')
    @stop
@stop
@section('content')
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(http://qaqyiren.cn/blog/wp-content/uploads/2016/08/夜景2.jpg);" data-stellar-background-ratio="0">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-left">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                            <span class="date-post">{{$detail->post_date->diffForHumans()}}</span>
                            <h1 class="mb30"><a href="#">{{$detail->post_title}}</a></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="gtco-main">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <article class="mt-negative"  style="width: 100%;">
                        <div class="text-left content-article">

                            <div class="row row-pb-sm">
                                <div class="col-md-12 animate-box">
                                    <blockquote>
                                        <h3><?php echo $detail->post_content; ?></h3>
                                    </blockquote>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
@stop