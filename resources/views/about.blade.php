@extends('layouts.master')

@section('title') @lang('public.about') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title text-uppercase">@lang('public.about_us')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.about')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="flat-recent-market">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrap-recent-text">
                        <h2 class="title">@lang('public.about_us')</h2>
                        <div class="content-text">
                          {{--<p>@lang('public.about_description-1')</p>
                            <p>@lang('public.about_description-2')</p>--}}
                            <p>@lang('public.company_profile_description1')</p>
                            <p>@lang('public.company_profile_description2')</p>
                            <p>@lang('public.company_profile_description3')</p>
                            <p>@lang('public.company_profile_description4')</p>
                            <a href="#" class="read-more" title="">@lang('public.get_started')</a>
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image center">
                        <img src="{{ asset('assets/images/page/banner.jpg') }}" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-recent-market -->

    <section class="flat-call-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-call-back">
                        <div class="title">
                            <h2>@lang('public.consultant')</h2>
                            <p>@lang('public.consultant_caption-1') {{--<a href="mailto:support@clarkwell.co" class="text-light">support@clarkwell.co</a>--}}<a href="mailto:@lang('public.email_weventure') " class="text-white-50">@lang('public.email_weventure') </a> @lang('public.consultant_caption-2').</p>
                        </div>
                        <div class="btn-call-back">
                            <a href="{{ route('contact') }}" title="">@lang('public.contact_us')</a>
                        </div>
                    </div><!-- /.wrap-call-back -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-call-back -->

    <section class="flat-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider">
                        <div class="testimonials center">
                            <h2 class="mb-4">@lang('public.about_founder')</h2>
                            <div class="col-md-4 mx-auto">
                                <div class="team-member center">
                                    <div class="team-image">
                                        <img src="{{ asset('assets/images/team/mr_jack.jpeg') }}" alt="">
                                    </div><!-- /.team-image -->
                                </div><!-- /.container -->
                            </div><!-- /.col-md-4 -->
                            <div class="message">
                                <h4 class="mb-2">
                                    @lang('public.about_founder_title')
                                </h4>
                                <blockquote class="whisper">
                                    @lang('public.about_founder_description')
                                </blockquote>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-name">Mr Jacky</div>
                                <div class="author-info">@lang('public.about_founder_heading')</div>
                            </div>
                        </div>
                    </div><!-- /#testimonial-slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-team -->

    <section class="flat-team bg-browse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>Management Profile</h2>
                        <p>Our team can help you buy bitcoins, choose a bitcoin wallet.</p>
                    </div>
                </div><!-- /.col-md-12 -->
                <div class="col-md-4">
                    <div class="team-member center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/team/manage-01.jpg') }}" alt=""></a>
                            <div class="team-desc">
                                <ul class="list-info">
                                    <li><i class="fa fa-globe" aria-hidden="true"></i> China region</li>
                                </ul>
                            </div>
                        </div><!-- /.team-image -->
                        <div class="team-info">
                            <div class="name">
                                <a href="#" title="">Kelvin</a>
                            </div>
                            <div class="position">
                                Director
                            </div>
                        </div><!-- /.team-info -->
                    </div><!-- /.container -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="team-member center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/team/manage-02.jpg') }}" alt=""></a>
                            <div class="team-desc">

                                <ul class="list-info">
                                    <li><i class="fa fa-globe" aria-hidden="true"></i> Greater China region</li>
                                </ul>
                            </div>
                        </div><!-- /.team-image -->
                        <div class="team-info">
                            <div class="name">
                                <a href="#" title="">Jason</a>
                            </div>
                            <div class="position">
                                Director
                            </div>
                        </div><!-- /.team-info -->
                    </div><!-- /.team-member -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4">
                    <div class="team-member center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/team/manage-03.jpg') }}" alt=""></a>
                            <div class="team-desc">
                                <ul class="list-info">
                                    <li><i class="fa fa-globe" aria-hidden="true"></i> South East Asia</li>
                                </ul>
                            </div>
                        </div><!-- /.team-image -->
                        <div class="team-info">
                            <div class="name">
                                <a href="#" title="">Darren</a>
                            </div>
                            <div class="position">
                                Director
                            </div>
                        </div><!-- /.team-info -->
                    </div><!-- /.team-member -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-team -->

    <section class="flat-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider">
                        <ul class="slides">
                            <li class="flex-active-slide" data-thumb="{{ asset('assets/images/flexslider/thumb/01.png') }}">
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
@endsection
