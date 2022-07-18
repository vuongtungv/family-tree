@extends('client.layouts_2.master')


@section('client_content_2')

    <div class="banner-wrapper has_background">
        <img src="client_asset/images/banner-blogs.jpg"
             class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner container">
            <h1 class="page-title">Blogs</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items breadcrumb">
                    <li class="trail-item trail-begin"><a href="{{route('client_home')}}"><span>Home</span></a></li>
                    <li class="trail-item trail-end active"><span>Blogs</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-container no-sidebar">
        <!-- POST LAYOUT -->
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12 col-sm-12">
                    <div class="blog-grid auto-clear content-post row">
                        @foreach($listNews as $key=> $item)
                            <article class="post-item post-grid col-bg-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-ts-12 post-{{$item->id}} post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="{{ route('client_detail_news', ['id' => $item->id, 'alias' => $item->alias]) }}">
                                        <img src="{{'/storage/app/public/'.str_replace('/original/','/small/', $item->image)}}"
                                             class="img-responsive attachment-370x330 size-370x330" alt="img" width="370"
                                             height="330"> </a>
                                </div>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <div class="post-author">
                                            <a href="javascript:void(0);"> admin </a>
                                        </div>
                                        <div class="date">
                                            <a href="javascript:void(0);">{{ date('F j, Y', strtotime($item->created_at)) }}</a>
                                        </div>
                                    </div>
                                    <div class="post-info equal-elem">
                                        <h2 class="post-title"><a href="{{'/storage/app/public/'.str_replace('/original/','/small/', $item->image)}}">{{$item->name}}</a></h2>
                                        {{$item->brief}}
                                    </div>
                                </div>
                            </div>
                        </article>
                       @endforeach
                    </div>

                    <nav class="navigation pagination">
                        <div class="nav-links">
                            {{--prev page--}}
                            @if($currentPage > 1)
                                <a class="prev page-numbers" href="{{ route('client_news_list_home_with_page', ['page' => $currentPage-1] ) }}">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            @endif

                            @for($i = 1; $i<= $countPage; $i++)
                                @if($currentPage == $i)
                                    <span class="page-numbers current">{{$i}}</span>
                                @else
                                    <a class="page-numbers"
                                       href="{{ route('client_news_list_home_with_page', ['page' => $i] ) }}"
                                    >
                                        {{$i}}
                                    </a>
                                @endif
                            @endfor

                            {{--next page--}}
                            @if($currentPage < $countPage)
                                <a class="next page-numbers" href="{{ route('client_news_list_home_with_page', ['page' => $currentPage+1] ) }}">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            @endif

                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>


@endsection
