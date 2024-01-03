@extends('layouts.master')

@section('title') @lang('public.news') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title">@lang('public.news-and-blog')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.news')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="main-content ">
        <div class="container">
            <div class="row">
           
                @foreach ($articles['articles'] as $article)
                    <div class="col-md-6">
                        <article class="main-post two-column">
                            <div class="featured-post">
                                <a href="#" title="">
                                    <img src="{{ asset('images/blog/post-2-column-02.jpg') }}" alt="" />
                                </a>
                            </div><!-- /.featured-post -->
                            <div class="entry-content">
                                <h2>
                                    <a href="#" title="">{{ $article['title'] }}</a>
                                </h2>
                                <p>
                                    {{ $article['description'] }}
                                </p>
                            </div><!-- /.entry-content -->
                            <ul class="meta-left">
                                <li class="post-date">
                                    <i class="fa fa-calendar"></i> {{ date_format(date_create($article['publishedAt']), 'Y M d') }}
                                </li>
                            </ul>
                        </article><!-- /.main-post -->
                    </div><!-- .col-md-6 -->
                @endforeach

{{--                <div class="col-md-12">--}}
{{--                    <div class="blog-pagination center">--}}
{{--                        <ul class="flat-pagination">--}}
{{--                            <li><a href="#" title="" class="active">1</a></li>--}}
{{--                            <li><a href="#" title="">2</a></li>--}}
{{--                            <li><a href="#" title=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                        </ul><!-- /.flat-pagination -->--}}
{{--                    </div><!-- /.blog-pagination -->--}}
{{--                </div>--}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->
@endsection
