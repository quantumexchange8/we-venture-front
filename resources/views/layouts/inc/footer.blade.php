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
                                        <img src="{{ asset('assets/images/CW2-new.png') }}" alt="">
                                    </a>
                                </div>
                                <p class="text-gray-dark">Clark Well Capital: Expert asset management for exceptional returns and minimized risk.</p>
                            </div>
                        </div><!-- /.widget-about -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title">QUICK LINK</h3>
                            <ul class="menu-footer one-half">
                                <li><a href="{{ route('about') }}" title=""><i class="fa fa-angle-double-right"></i> About</a></li>
                                <li><a href="{{ route('service') }}" title=""><i class="fa fa-angle-double-right"></i> Service</a></li>
                                <li><a href="{{ route('core_value') }}" title=""><i class="fa fa-angle-double-right"></i> Core Value</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="menu-footer one-half">
                                <li><a href="{{ route('faqs') }}" title=""><i class="fa fa-angle-double-right"></i> FAQ</a></li>
                                <li><a href="{{ route('news') }}" title=""><i class="fa fa-angle-double-right"></i> News</a></li>
                                <li><a href="{{ route('portfolio') }}" title=""><i class="fa fa-angle-double-right"></i> Portfolio</a></li>
                            </ul><!-- /.one-half -->
                            <div class="clearfix"></div>
                        </div><!-- /.widget_nav_menu -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget_contact">
                            <h3 class="widget-title">CONTACT</h3>
                            <ul class="contact-list">
                                <li>
                                    Location: <span class="text-gray-dark">Hong Kong office, China office, Malaysia Office, Thailand office</span>
                                </li>
                                <li>
                                    Email: <span class="text-gray-dark"><a href="mailto:support@clarkwell.co">support@clarkwell.co</a></span>
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
                            <a href="{{ route('core_value') }}" title="">@lang('public.insights')</a>
                        </li>
                        <li>
                            <a href="{{ route('faqs') }}" title="">@lang('public.resources')</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="">@lang('public.contact')</a>
                        </li>
                    </ul>
                    <div class="copyright">
                        <p>© Copyright <a href="https://clarkwell.co/" target="_blank">Clark Well</a> {{ now()->year }}</p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer_background -->
