@extends('blog.public')
    @section('head')
        @extends('blog.menu')
            @section('menu')
        @stop
    @stop
    @section('content')
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(http://qaqyiren.cn/blog/wp-content/uploads/2016/08/夜景2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-left">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                                <span class="date-post">{{$data[0]->post_date->diffForHumans()}}</span>
                                <h1 class="mb30"><a href="#">{{$data[0]->post_title}}</a></h1>
                                @if(mb_strlen($data[0]->post_content) > 50)
                                <h2><?php echo mb_substr($data[0]->post_content,0,50); ?>...</h2>
                                @else
                                <h2><?php echo $data[0]->post_content; ?></h2>
                                @endif
                                <p><a href="{{URL('/blog/detail/'.$data[0]->id)}}" class="text-link">点我阅读</a></p>
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
                        <ul id="gtco-post-list">
                            @foreach($data as $k => $v)
                            <li class="{{$sort[$k]}}-third entry animate-box" data-animate-effect="fadeIn">
                                <a href="{{URL('/blog/detail/'.$v->id)}}">
                                    <div class="entry-img" style="background-image: url({{URL::asset('images/img_'.($k+1).'.jpg')}}"></div>
                                    <div class="entry-desc">
                                        <h3>{{$v->post_title}}</h3>
                                        @if(mb_strlen($v->post_content) > 100)
                                        <p><?php echo mb_substr($v->post_content,0,100); ?>...</p>
                                        @else
                                        <p><?php echo $v->post_content; ?></p>
                                        @endif
                                    </div>
                                </a>
                                <a href="{{URL('/blog/detail/'.$v->id)}}" class="post-meta">作者:yiren<span class="date-posted">{{$v->post_date->diffForHumans()}}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="{{$data->url(1)}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                {{--{{$data->render()}} //简易分页--}}
                                @for($i = 1 ; $i <= $data->lastPage(); $i++)
                                <li class="{{ ($data->currentPage() == $i) ? 'active' : ''}}"><a href="{{$data->url($i)}}">{{$i}}</a></li>
                                @endfor
                                <li>
                                    <a href="{{$data->url($data->lastPage())}}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @stop