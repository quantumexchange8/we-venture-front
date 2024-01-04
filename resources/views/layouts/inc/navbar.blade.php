<header id="header" class="header bg-color">
    <div class="container">
        <div class="row">
            <div class="header-wrap">
                <div id="logo" class="logo">
                    <a href="{{ route('index') }}" title="">
                        <img src="{{ asset('assets/images/wv-02-02.svg') }}" alt="logo We Venture" class="logo-img" />
                    </a>
                </div><!-- /#logo -->

                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu text-uppercase">
                            <li class="{{ request()->is('/') ? 'active' : '' }}">
                                <a href="{{ route('index') }}" title="">@lang('public.home')</a>
                            </li>
                            <li class="{{ request()->is('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}" title="">@lang('public.about')</a>
                            </li>
                            <li class="{{ request()->is('service') ? 'active' : '' }}">
                                <a href="{{ route('service') }}" title="">@lang('public.service')</a>
                            </li>
                            <li class="{{ request()->is('insight/*') ? 'active' : '' }}">
                                <a href="{{ route('core_value') }}" title="">@lang('public.app_scenario')</a>
                               {{-- <ul class="sub-menu">
                                    <li class="{{ request()->is('insight/core_value') ? 'active' : '' }}"><a href="{{ route('core_value') }}" title="">@lang('public.core_value')</a></li>
                                    <li class="{{ request()->is('insight/portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}" title="">@lang('public.portfolio')</a></li>
                                </ul><!-- /.sub-menu -->--}}
                            </li>
                            {{--
                            <li class="{{ request()->is('performance/*') ? 'active' : '' }}">
                                <a href="{{ route('merge_signal_strategy') }}" title="">@lang('public.performance')</a>
                                <ul class="sub-menu">
                                    <li class="{{ request()->is('performance/merge_signal_strategy') ? 'active' : '' }}"><a href="{{ route('merge_signal_strategy') }}" title="">@lang('public.merge_signal_strategy')</a></li>
                                    <li class="{{ request()->is('performance/grand_pacific_strategy') ? 'active' : '' }}"><a href="{{ route('grand_pacific_strategy') }}" title="">@lang('public.grand_pacific_strategy')</a></li>
                                </ul> 
                                 <!-- /.sub-menu -->
                           
                            </li> 
                            --}}
                            <li class="{{ request()->is('resource/*') ? 'active' : '' }}">
                                <a href="{{ route('news') }}" title="">@lang('public.news')</a>
                                {{--<ul class="sub-menu">
                                     <li class="{{ request()->is('news/faqs') ? 'active' : '' }}"><a href="{{ route('faqs') }}" title="">@lang('public.faqs')</a></li> 
                                    <li class="{{ request()->is('news/news') ? 'active' : '' }}"><a href="{{ route('news') }}" title="">@lang('public.news')</a></li>
                                </ul>--}}<!-- /.sub-menu -->
                            </li>


                            {{--
                            <li class="{{ request()->is('resource/*') ? 'active' : '' }}">
                                <a href="{{ route('faqs') }}" title="">@lang('public.resources')</a>
                                <ul class="sub-menu">
                                    <li class="{{ request()->is('resource/faqs') ? 'active' : '' }}"><a href="{{ route('faqs') }}" title="">@lang('public.faqs')</a></li>
                                    <li class="{{ request()->is('resource/news') ? 'active' : '' }}"><a href="{{ route('news') }}" title="">@lang('public.news')</a></li>
                                </ul>
                            </li>
                            --}}
                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}" title="">@lang('public.contact')</a>
                            </li>
                        </ul><!-- /.menu -->
                    </nav><!-- /#mainnav -->
                </div><!-- /.nav-wrap -->
            </div><!-- /.header-wrap -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</header><!-- /#header -->
