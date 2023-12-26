<div class="themesflat-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="flat-infomation">
                    <li class="email"><a href="mailto:infocentre.weventure@gmail.com" title="email">@lang('public.email'): infocentre.weventure@gmail.com</a></li>
                    <li class="dropdown">
                        <span type="button" class="text-white dropdown-toggle" data-toggle="dropdown">
                            @if (App::getLocale() === 'en')
                                English
                            @elseif (App::getLocale() === 'cn')
                                简体中文
                            @else
                                @lang('public.select_language')
                            @endif
                        </span>
                        <div class="dropdown-content">
                            <a class="dropdown-item" style="color: #696057; font-size: 12px" href="{{ url('localization/en') }}">
                                <img class="mr-2" src="{{ asset('assets/icon/en.png') }}" alt="English">English
                            </a>
                            <a class="dropdown-item" style="color: #696057; font-size: 12px" href="{{ url('localization/cn') }}">
                                <img class="mr-2" src="{{ asset('assets/icon/cn.png') }}" alt="简体中文">简体中文
                            </a>
                        </div>
                    </li>
                </ul><!-- /.flat-infomation -->
                <ul class="box-account">
                    <li class="login">
                        <a href="https://login.we-ventures.net/welcome" target="_blank" title="">@lang('public.login')</a>
                    </li>
                    <li class="sign-in">
                        <a href="https://login.we-ventures.net/register" target="_blank" title="">@lang('public.signup')</a>
                    </li>
                </ul><!-- /.box-account -->
                <div class="clearfix"></div><!-- /.clearfix -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.themesflat-top -->
