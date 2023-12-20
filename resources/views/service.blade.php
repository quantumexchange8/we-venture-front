@extends('layouts.master')

@section('title') @lang('public.service') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title text-uppercase">@lang('public.product_service')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.product_service')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="flat-why-choose">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>@lang('public.product_service_title-1')</h2>
                        <p>@lang('public.product_service_caption')</p>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox inline-left style2 v1 left">
                        <div class="icon">
                            <i class="fa fa-handshake-o text-white align-middle" style="font-size: 32px"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>@lang('public.product_service_title-1')</h4>
                            <p>@lang('public.product_service_description-1')</p>
                        </div>
                    </div><!-- /.iconbox style2 v1 -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox inline-left style2 v1 left">
                        <div class="icon">
                            <i class="fa fa-money text-white align-middle" style="font-size: 32px"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>@lang('public.product_service_title-2')</h4>
                            <p>@lang('public.product_service_description-2')</p>
                        </div>
                    </div><!-- /.iconbox style2 v1 -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="iconbox inline-left style2 v1 left">
                        <div class="icon">
                            <i class="fa fa-area-chart text-white align-middle" style="font-size: 28px"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>@lang('public.product_service_title-3')</h4>
                            <p>@lang('public.product_service_description-3')</p>
                        </div>
                    </div><!-- /.iconbox style2 v1 -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="iconbox inline-left style2 v1 left">
                        <div class="icon">
                            <i class="fa fa-user-circle-o text-white align-middle" style="font-size: 32px"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>@lang('public.product_service_title-4')</h4>
                            <p>@lang('public.product_service_description-4')</p>
                        </div>
                    </div><!-- /.iconbox style2 v1 -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-6 col-md-6">
                    <div class="iconbox inline-left style2 v1 left">
                        <div class="icon">
                            <i class="fa fa-hand-paper-o text-white align-middle" style="font-size: 32px"></i>
                        </div>
                        <div class="iconbox-content">
                            <h4>@lang('public.product_service_title-5')</h4>
                            <p>@lang('public.product_service_description-5')</p>
                        </div>
                    </div><!-- /.iconbox style2 v1 -->
                </div><!-- /.col-lg-4 col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-why-choose -->

    <section class="flat-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 CLASS="text-uppercase">@lang('public.product_service_strategy')</h2>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="iconbox style1 center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/orders.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">DG SYSTEM - Dynamic Gold System</a></h4>
                            <p>@lang('public.product_service_strategy-1')</p>
                        </div>
                    </div><!-- /.iconbox style1 -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-6">
                    <div class="iconbox style1 center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/exchange-1.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <h4><a href="#" title="">PULSAR REVERSION</a></h4>
                            <p>@lang('public.product_service_strategy-2')</p>
                        </div>
                    </div><!-- /.iconbox style1 -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-work -->

    <section class="flat-testimonial bg-browse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider">
                        <ul class="slides">
                            <li class="flex-active-slide" data-thumb="images/flexslider/thumb/01.png">
                                <div class="testimonials center">
                                    <div class="logo-testimonial">
                                        <span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    </div>
                                    <div class="message">
                                        <blockquote class="whisper">
                                           "@lang('public.core_value_quote')"
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-name">@lang('public.clarkwell')</div>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.slides -->
                    </div><!-- /.testimonial-slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-testimonial -->

    <section class="flat-call-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-call-back">
                        <div class="title">
                            <h2>@lang('public.consultant')</h2>
                            <p>@lang('public.consultant_caption-1') <a href="mailto:support@clarkwell.co" class="text-gray-dark">support@clarkwell.co</a> @lang('public.consultant_caption-2').</p>
                        </div>
                        <div class="btn-call-back">
                            <a href="{{ route('contact') }}" title="">@lang('public.contact_us')</a>
                        </div>
                    </div><!-- /.wrap-call-back -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-call-back -->
@endsection
