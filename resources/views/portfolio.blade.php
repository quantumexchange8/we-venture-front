@extends('layouts.master')

@section('title') @lang('public.portfolio') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title text-uppercase">@lang('public.portfolio')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.portfolio')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="main-content ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>@lang('public.portfolio_why_choose_us')</h2>
                        <p>@lang('public.portfolio_caption')</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="top-title center">
                        <h4>@lang('public.portfolio_description')</h4>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="team-member style1 center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/blog/proteam-portfolio.jpg') }}" alt=""></a>
                        </div><!-- /.team-member -->
                        <div class="team-info d-flex flex-column">
                            <div class="name">
                                <a href="#" style="color: #000c66" title="">@lang('public.professional_team')</a>
                            </div>
                            <p>
                                @lang('public.portfolio_description-1')
                            </p>
                        </div><!-- /.team-info -->
                    </div><!-- /.team-member style1 -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="team-member style1 center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/blog/multi-portfolio.jpg') }}" alt=""></a>
                        </div><!-- /.team-member -->
                        <div class="team-info d-flex flex-column">
                            <div class="name">
                                <a href="#" style="color:  #000c66" title="">@lang('public.multi_asset_investing')</a>
                            </div>
                            <p>
                                @lang('public.portfolio_description-2')
                            </p>
                        </div><!-- /.team-info -->
                    </div><!-- /.team-member style1 -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="team-member style1 center">
                        <div class="team-image">
                            <a href="#" title=""><img src="{{ asset('assets/images/blog/testimonial-portfolio.jpg') }}" alt=""></a>
                        </div><!-- /.team-member -->
                        <div class="team-info d-flex flex-column">
                            <div class="name">
                                <a href="#" style="color:  #000c66" title="">@lang('public.client_driven_exp')</a>
                            </div>
                            <p>
                                @lang('public.portfolio_description-3')
                            </p>
                        </div><!-- /.team-info -->
                    </div><!-- /.team-member style1 -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.main-content -->

    <section class="flat-pricing bg-browse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 class="text-uppercase">@lang('public.clark_well_strategy_portfolio')</h2>
                        <p>@lang('public.clark_well_strategy_portfolio_caption')</p>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="price-wrapper center basic">
                        <div class="content-post d-flex flex-column">
                            <div class="price-header">
                                <h3 class="title text-uppercase">Grand Pacific Strategy</h3>
                            </div>
                            <div class="price-content">
                                <div class="price-desc">
                                    <ul>
                                        <li>
												<span class="col-4">
													@lang('public.min_amount')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													$250, 000
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.expert_profit')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													4 - 10%
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.risk_per_trade')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													1 - 2%
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.max_drawdown')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													20%
												</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- ./content-post -->
                    </div><!-- /.price-wrapper -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="price-wrapper center basic">
                        <div class="content-post d-flex flex-column">
                            <div class="price-header">
                                <h3 class="title text-uppercase">Merge Signal Strategy</h3>
                            </div>
                            <div class="price-content">
                                <div class="price-desc">
                                    <ul>
                                        <li>
												<span class="col-4">
													@lang('public.min_amount')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													$1,000
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.expert_profit')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													5 - 15%
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.risk_per_trade')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													2 - 4%
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.max_drawdown')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													30%
												</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- ./content-post -->
                    </div><!-- /.price-wrapper -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 d-flex align-self-stretch">
                    <div class="price-wrapper center basic">
                        <div class="content-post d-flex flex-column">
                            <div class="price-header" style="padding-bottom: 10px">
                                <h3 class="title text-uppercase">High Frequency Strategy</h3>
                                <span class="badge badge-warning">Coming Soon</span>
                            </div>
                            <div class="price-content">
                                <div class="price-desc">
                                    <ul>
                                        <li>
												<span class="col-4">
													@lang('public.min_amount')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													<span class="badge badge-warning" style="font-size: 10px">Nearing</span>
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.expert_profit')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													<span class="badge badge-warning" style="font-size: 10px">Nearing</span>
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.risk_per_trade')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													<span class="badge badge-warning" style="font-size: 10px">Nearing</span>
												</span>
                                        </li>
                                        <li>
												<span class="col-4">
													@lang('public.max_drawdown')
												</span>
                                            <span class="col-4">
													=
												</span>
                                            <span class="col-4">
													<span class="badge badge-warning" style="font-size: 10px">Nearing</span>
												</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- ./content-post -->
                    </div><!-- /.price-wrapper -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-pricing -->
    <section class="flat-call-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-call-back">
                        <div class="title">
                            <h2>@lang('public.consultant')</h2>
                            <p>@lang('public.consultant_caption-1') <a href="mailto:@lang('public.email_weventure')" class="text-light">@lang('public.email_weventure')</a> @lang('public.consultant_caption-2').</p>
                        </div>
                        <div class="btn-call-back">
                            <a href="{{ route('contact') }}" title="">@lang('public.contact_us')</a>
                        </div>
                    </div><!-- /.wrap-call-back -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-call-back -->

    <section class="flat-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 class="text-uppercase">@lang('public.fx_broker')</h2>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider">
                        <ul class="slides">
                            <li class="flex-active-slide" data-thumb="{{ asset('assets/images/flexslider/thumb/broker-LA.png') }}">
                                <div class="testimonials center">
                                    <div class="message">
                                        <blockquote class="whisper">
                                            Longasia is a multi-licensed broker that operates since 2012. It started with a group of finance enthusiasts, and slowly buildup in the market throughout the years. With the belief of “Success is best when it’s shared”, Long Asia expanded their business to both institutional clients and retail clients globally. Currently, they are holding Canada MSB license, New Zealand FSP license and Australia ASIC license.
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-name">Long Asia Group</div>
                                        <div class="author-info">FX Broker</div>
                                    </div>
                                </div>
                            </li>
                            <li class="flex-active-slide" data-thumb="{{ asset('assets/images/flexslider/thumb/broker-vantage.jpg') }}">
                                <div class="testimonials center">
                                    <div class="message">
                                        <blockquote class="whisper">
                                            Vantage FX is an Australian-based online forex and CFD (Contracts for Difference) broker. Founded in 2009, Vantage FX provides trading services to retail and institutional clients across the globe Vantage FX is regulated by the Australian Securities and Investments Commission (ASIC), which helps ensure the broker's compliance with financial regulations and safeguards the interests of its clients.
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-name">Vantage</div>
                                        <div class="author-info">FX Broker</div>
                                    </div>
                                </div>
                            </li>
                            <li class="flex-active-slide" data-thumb="{{ asset('assets/images/flexslider/thumb/broker-Swissquote.png') }}">
                                <div class="testimonials center">
                                    <div class="message">
                                        <blockquote class="whisper">
                                            Swissquote is a Swiss online banking and financial services provider. It is primarily known for its online trading platform, which allows individuals to trade various financial instruments such as stocks, bonds, options, futures, and foreign exchange. Swissquote was founded in 1996 and is headquartered in Gland, Switzerland. It is regulated by the Swiss Financial Market Supervisory Authority (FINMA) and is listed on the SIX Swiss Exchange, making it a publicly traded company.
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-name">Swissquote </div>
                                        <div class="author-info">FX Broker</div>
                                    </div>
                                </div>
                            </li>
                            <li class="flex-active-slide" data-thumb="{{ asset('assets/images/flexslider/thumb/broker-ecib.jpg') }}">
                                <div class="testimonials center">
                                    <div class="message">
                                        <blockquote class="whisper">
                                            European Credit Investment Bank has been operating as an independent investment bank for over 14 years under the supervision of the Labuan Financial Services Authority (LFSA). ECI Bank specializes in offering financial services, advisory, and wealth management to private clients. They also have expertise in securities and foreign exchange activities. The bank primarily focuses on catering to high-net-worth individuals and families, providing services in the areas of private banking and financial engineering.
                                        </blockquote>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-name">European Credit Investment Bank </div>
                                        <div class="author-info">Investment Bank</div>
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
