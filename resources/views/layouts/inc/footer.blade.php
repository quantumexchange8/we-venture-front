<footer id="footer_background">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-widgets">
                    <div class="col-md-4">
                        <div class="widget widget-about">
                            <div class="widget-text">
                                <div id="logo-ft">
                                    <a href="{{ route('index') }}" title="">
                                        <img src="{{ asset('assets/images/logo-01.png') }}" alt="">
                                    </a>
                                </div>
                                <p class="text-gray-dark"><!--Clark Well Capital: Expert asset management for exceptional returns and minimized risk.-->@lang('public.we-venture') : @lang('public.cultivating_intelligent_strategies')</p>
                            </div>
                        </div><!-- /.widget-about -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">@lang('public.quick-link')</h3>
                            <ul class="menu-footer one-half">
                                <li><a href="{{ route('about') }}" title=""><i class="fa fa-angle-double-right"></i> @lang('public.about')</a></li>
                                <li><a href="{{ route('service') }}" title=""><i class="fa fa-angle-double-right"></i> @lang('public.service')</a></li>
                                <li><a href="{{ route('core_value') }}" title=""><i class="fa fa-angle-double-right"></i> @lang('public.core_value')</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="menu-footer one-half">
                              {{--  <li><a href="{{ route('faqs') }}" title=""><i class="fa fa-angle-double-right"></i> FAQ</a></li>--}}
                                <li><a href="{{ route('news') }}" title=""><i class="fa fa-angle-double-right"></i>  @lang('public.news')</a></li>
                                <li><a href="{{ route('portfolio') }}" title=""><i class="fa fa-angle-double-right"></i> @lang('public.portfolio')</a></li>
                            </ul><!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div><!-- /.widget_nav_menu -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget_contact">
                            <h3 class="widget-title">@lang('public.contact')</h3>
                            <ul class="contact-list">
                                <li>
                                    @lang('public.id') : <span class="text-gray-dark">20238349803</span>
                                </li>
                                <li>
                                    @lang('public.address') : <span class="text-gray-dark">6547 N Academy Blvd, Colorado Springs, CO 80918, US</span>
                                </li>
                                <li>
                                    @lang('public.email') : <span class="text-gray-dark"><!--<a href="mailto:support@clarkwell.co">support@clarkwell.co</a>--><a href="mailto:infocentre.weventure@gmail.com ">infocentre.weventure@gmail.com </a></span>
                                </li>
                            </ul>
                        </div><!-- /.widget_contact -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.footer-widgets -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu-ft-bottom">
                        <li>
                            <a href="{{ route('index') }}" title="">@lang('public.home')</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="">@lang('public.about')</a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}" title="">@lang('public.service')</a>
                        </li>
                        <li>
                            <a href="{{ route('core_value') }}" title="">@lang('public.app_scenario')</a>
                        </li>
                      <li>
                            <a href="{{ route('news') }}" title="">@lang('public.news')</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="">@lang('public.contact')</a>
                        </li>
                    </ul>
                    <div class="copyright">
                        {{--<p>© Copyright <a href="https://clarkwell.co/" target="_blank">Clark Well</a> {{ now()->year }}</p>--}}
                        <p>© Copyright <a href="#" target="_blank">We Venture</a> {{ now()->year }}</p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer_background -->
