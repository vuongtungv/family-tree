@extends('client.layouts_2.master')

@section('client_content_2')

<div class="banner-wrapper no_background">
    <div class="banner-wrapper-inner container">
        <div class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item"><a href="#"><span>Blog</span></a></li>
                <li class="trail-item trail-end active"><span>Single Post.</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="main-container left-sidebar has-sidebar">
    <!-- POST LAYOUT -->
    <div class="container">
        <div class="row">
            <div class="main-content col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <article
                    class="post-item post-single post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                    <div class="single-post-thumb">
                        <div class="post-thumb">
                            <img src="{{ '/storage/app/public/'.str_replace('/original/','/large/',$detail->image )}}"
                                 class="attachment-full size-full wp-post-image" alt="img"></div>
                    </div>
                    <div class="single-post-info">
                        <h2 class="post-title"><a href="#">{{$detail->name}}</a></h2>
                        <div class="post-meta">
                            <div class="date">
                                <a href="#">{{ date('F j, Y, g:i a', strtotime($detail->created_at)) }}</a>
                            </div>
                            <div class="post-author">
                                By:<a href="#"> admin </a>
                            </div>
                        </div>
                    </div>
                    <div class="post-content">
                        <div id="output">
                            <p>{{$detail->brief}}</p>
                        </div>
                        {!! $detail->content !!}
                    </div>
                    {{--<div class="tags">--}}
                        {{--<a href="#" rel="tag">Toys</a>, <a--}}
                            {{--href="#" rel="tag">Life Style</a>--}}
                    {{--</div>--}}
                    <div class="post-footer">
                        <div class="kodory-share-socials">
                            <h5 class="social-heading">Share: </h5>
                            <a target="_blank" class="facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                            <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>

                            <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="categories">
                            <span>Categories: </span>
                            <a href="#">{{$detail->category_name}}</a>
                            {{--<a href="#">Clothing</a>,--}}
                            {{--<a href="#">Life Style</a>--}}
                        </div>
                    </div>
                </article>
                {{--<div id="comments" class="comments-area">--}}
                    {{--<div id="respond" class="comment-respond">--}}
                        {{--<h3 id="reply-title" class="comment-reply-title">Leave a comment</h3>--}}
                        {{--<form id="commentform" class="comment-form">--}}
                            {{--<p class="comment-notes"><span--}}
                                    {{--id="email-notes">Your email address will not be published.</span> Required fields--}}
                                {{--are marked <span class="required">*</span></p>--}}
                            {{--<p class="comment-reply-content"><input name="author" id="name" class="input-form name"--}}
                                                                    {{--placeholder="Name*" type="text"></p>--}}
                            {{--<p class="comment-reply-content"><input name="email" id="email" class="input-form email"--}}
                                                                    {{--placeholder="Email*" type="text"></p>--}}
                            {{--<p class="comment-form-comment"><textarea class="input-form" id="comment" name="comment"--}}
                                                                      {{--cols="45" rows="6" aria-required="true"--}}
                                                                      {{--placeholder="Enter you comment here..."></textarea>--}}
                            {{--</p><input name="wpml_language_code" value="en" type="hidden">--}}
                            {{--<p class="form-submit"><input name="submit" id="submit" class="submit"--}}
                                                          {{--value="Post a comment" type="submit"></p>--}}
                        {{--</form>--}}
                    {{--</div><!-- #respond -->--}}
                {{--</div><!-- #comments -->--}}
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
                                <li class="cat-item cat-item-{{$item->id}} {{$item->id == $detail->category_id ? "active" : ''}}"><a href="{{route('client_news_list_by_category', [ 'id' => $item->id ,'alias'=> $item->alias ]) }}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="widget_kodory_post-2" class="widget widget-kodory-post"><h2 class="widgettitle">Recent
                            Post<span class="arrow"></span></h2>
                        <div class="kodory-posts">
                            @foreach($recentPost as $item)
                                <article
                                    class="post-{{$item->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                                    <div class="post-item-inner">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img src="{{ '/storage/app/public/'.str_replace('/original/','/tiny/',$item->image )}}"
                                                     class="img-responsive attachment-83x83 size-83x83" alt="img" width="83"
                                                     height="83"> </a>
                                        </div>
                                        <div class="post-info">
                                            <div class="block-title">
                                                <h2 class="post-title"><a
                                                        href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}">{{$item->name}}</a></h2>
                                            </div>
                                            <div class="date">{{ date('F j, Y', strtotime($detail->created_at)) }}</div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
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
                        {{--<div class="tagcloud">--}}
                            {{--<a href="#" class="tag-cloud-link tag-link-46 tag-link-position-1" aria-label="Toys (4 items)">Toys</a>--}}
                            {{--<a href="#"--}}
                               {{--class="tag-cloud-link tag-link-43 tag-link-position-2"--}}
                               {{--aria-label="Fashion (5 items)">Fashion</a>--}}
                            {{--<a href="#"--}}
                               {{--class="tag-cloud-link tag-link-47 tag-link-position-3"--}}
                               {{--aria-label="Clothing (4 items)">Clothing</a>--}}
                            {{--<a href="#"--}}
                               {{--class="tag-cloud-link tag-link-48 tag-link-position-4"--}}
                               {{--aria-label="Collection (4 items)">Collection</a>--}}
                            {{--<a href="#"--}}
                               {{--class="tag-cloud-link tag-link-45 tag-link-position-5"--}}
                               {{--aria-label="Life Style (7 items)">Life Style</a>--}}
                        {{--</div>--}}
                    </div>
                </div><!-- .widget-area -->
            </div>
        </div>
    </div>
</div>

@endsection

