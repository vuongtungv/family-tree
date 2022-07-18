@extends('client.layouts_2.master')


@section('client_content_2')

    <div class="banner-wrapper has_background">
        <img src="{{'/storage/app/public/'.$detailCategory->image}}"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner container">
            <h1 class="page-title">Blogs</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="{{route('client_home')}}"><span>Home</span></a></li>
                    <li class="trail-item trail-end"><a href="{{route('client_news_list_home')}}"><span>Blogs</span></a></li>
                    <li class="trail-item trail-end active"><span>{{$detailCategory->name}}</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-container left-sidebar has-sidebar">
        <!-- POST LAYOUT -->
        <div class="container">
            <div class="row">
                <div class="main-content col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-standard content-post">
                        @foreach($list_news as $key => $item)
                            <article class="post-item post-standard post-{{$item->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                            <div class="post-thumb">
                                <a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}">
                                    <img src="{{'/storage/app/public/'.str_replace('/original/','/large/', $item->image)}}" class="img-responsive attachment-1170x768 size-1170x768" alt="img" width="1170"
                                        height="768">
                                </a>
                            </div>
                            <div class="post-info">
                                <h2 class="post-title"><a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}">{{$item->name}}</a></h2>
                                <div class="post-meta">
                                    <div class="date">
                                        <a href="javascript:void(0);">{{ date('F j, Y, g:i a', strtotime($item->created_at)) }}</a>
                                    </div>
                                    <div class="post-author">
                                        By:<a href="javascript:void(0);"> admin</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-content">
                                {{$item->brief}}
                            </div>
                            <a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}" class="readmore">Read more</a>
                        </article>
                        @endforeach
                    </div>
                    <nav class="navigation pagination">
                        <div class="nav-links">
                            {{--prev page--}}
                            @if($currentPage > 1)
                                <a class="prev page-numbers" href="{{ route('client_news_list_by_category_with_page', ['id'=> $detailCategory->id, 'alias' => $detailCategory->alias, 'page' => $currentPage-1] ) }}">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            @endif

                            @for($i = 1; $i<= $countPage; $i++)
                                @if($currentPage == $i)
                                    <span class="page-numbers current">{{$i}}</span>
                                @else
                                    <a class="page-numbers"
                                        href="{{ route('client_news_list_by_category_with_page', ['id'=> $detailCategory->id, 'alias' => $detailCategory->alias, 'page' => $i] ) }}"
                                    >
                                        {{$i}}
                                    </a>
                                @endif
                            @endfor

                            {{--next page--}}
                            @if($currentPage < $countPage)
                                <a class="next page-numbers" href="{{ route('client_news_list_by_category_with_page', ['id'=> $detailCategory->id, 'alias' => $detailCategory->alias, 'page' => $currentPage+1] ) }}">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            @endif

                        </div>
                    </nav>
                </div>
                <div class="sidebar kodory_sidebar col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <div id="widget-area" class="widget-area sidebar-blog">
                        <div id="search-3" class="widget widget_search">
                            <form role="search" method="get" class="search-form" >
                                <input class="search-field" placeholder="Your search here…" value="" name="s" type="search">
                                <button type="submit" class="search-submit"><span class="fa fa-search"
                                                                                  aria-hidden="true"></span></button>
                                <input name="lang" value="en" type="hidden"></form>
                        </div>
                        <div id="categories-3" class="widget widget_categories"><h2 class="widgettitle">Categories<span
                                    class="arrow"></span></h2>
                            <ul>
                                @foreach($listNewsCategory as $key=> $item)
                                    <li class="cat-item cat-item-{{$item->id}} {{$item->id == $detailCategory->id ? "active" : ''}}"><a href="{{route('client_news_list_by_category', [ 'id' => $item->id ,'alias'=> $item->alias ]) }}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{--<div id="widget_kodory_post-2" class="widget widget-kodory-post"><h2 class="widgettitle">Recent--}}
                                {{--Post<span class="arrow"></span></h2>--}}
                            {{--<div class="kodory-posts">--}}
                                {{--<article--}}
                                    {{--class="post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">--}}
                                    {{--<div class="post-item-inner">--}}
                                        {{--<div class="post-thumb">--}}
                                            {{--<a href="single-post.html">--}}
                                                {{--<img src="client_asset/images/blogpost1-83x83.jpg"--}}
                                                     {{--class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"--}}
                                                     {{--height="83"> </a>--}}
                                        {{--</div>--}}
                                        {{--<div class="post-info">--}}
                                            {{--<div class="block-title">--}}
                                                {{--<h2 class="post-title"><a--}}
                                                        {{--href="single-post.html">Not--}}
                                                        {{--your ordinary baby service.</a></h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="date">December 19, 2018</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                                {{--<article--}}
                                    {{--class="post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">--}}
                                    {{--<div class="post-item-inner">--}}
                                        {{--<div class="post-thumb">--}}
                                            {{--<a href="single-post.html">--}}
                                                {{--<img src="client_asset/images/blogpost5-83x83.jpg"--}}
                                                     {{--class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"--}}
                                                     {{--height="83"> </a>--}}
                                        {{--</div>--}}
                                        {{--<div class="post-info">--}}
                                            {{--<div class="block-title">--}}
                                                {{--<h2 class="post-title"><a--}}
                                                        {{--href="single-post.html">The--}}
                                                        {{--child is sleeping on the bed</a></h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="date">December 19, 2018</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                                {{--<article--}}
                                    {{--class="post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">--}}
                                    {{--<div class="post-item-inner">--}}
                                        {{--<div class="post-thumb">--}}
                                            {{--<a href="single-post.html">--}}
                                                {{--<img src="client_asset/images/blogpost9-83x83.jpg"--}}
                                                     {{--class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"--}}
                                                     {{--height="83"> </a>--}}
                                        {{--</div>--}}
                                        {{--<div class="post-info">--}}
                                            {{--<div class="block-title">--}}
                                                {{--<h2 class="post-title"><a--}}
                                                        {{--href="single-post.html">The--}}
                                                        {{--light is hugging the dog on the room</a></h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="date">December 19, 2018</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                                {{--<article--}}
                                    {{--class="post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">--}}
                                    {{--<div class="post-item-inner">--}}
                                        {{--<div class="post-thumb">--}}
                                            {{--<a href="single-post.html">--}}
                                                {{--<img src="client_asset/images/blogpost4-83x83.jpg"--}}
                                                     {{--class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"--}}
                                                     {{--height="83"> </a>--}}
                                        {{--</div>--}}
                                        {{--<div class="post-info">--}}
                                            {{--<div class="block-title">--}}
                                                {{--<h2 class="post-title"><a--}}
                                                        {{--href="single-post.html">The--}}
                                                        {{--child is swimming with a buoy</a></h2>--}}
                                            {{--</div>--}}
                                            {{--<div class="date">December 19, 2018</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</article>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div id="widget_kodory_socials-2" class="widget widget-kodory-socials">
                            <h2 class="widgettitle">Follow us<span class="arrow"></span></h2>
                            <div class="content-socials">
                                <ul class="socials-list">
                                    <li>
                                        <a href="https://facebook.com" target="_blank">
                                            <span class="fa fa-facebook"></span>
                                            Facebook </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com" target="_blank">
                                            <span class="fa fa-instagram"></span>
                                            Instagram </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com" target="_blank">
                                            <span class="fa fa-twitter"></span>
                                            Twitter </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="widget_kodory_instagram-3" class="widget widget-kodory-instagram"><h2
                                class="widgettitle">Instagram<span class="arrow"></span></h2>
                            <div class="content-instagram">
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta1.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta2.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta3.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta4.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta5.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                                <a target="_blank" href="#" class="item">
                                    <img class="img-responsive" src="client_asset/images/insta6.jpg"
                                         alt="Not your ordinary multi service.">
                                </a>
                            </div>
                        </div>
                        <div id="tag_cloud-3" class="widget widget_tag_cloud"><h2 class="widgettitle">Tags<span
                                    class="arrow"></span></h2>
                            <div class="tagcloud">
                                @foreach($listNewsCategory as $key=> $item)
                                    <a href="{{route('client_news_list_by_category', [ 'id' => $item->id ,'alias'=> $item->alias ]) }}" class="tag-cloud-link tag-link-{{$item->id}} tag-link-position-{{$item->id}}" aria-label="{{$item->name}}">{{$item->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- .widget-area -->
                </div>
            </div>
        </div>
    </div>

@endsection
