@extends('layouts.master')

@section('title') @lang('public.home') @endsection

@section('content')
    <!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
    <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <div class="slotholder"></div>


            <ul><!-- SLIDE  -->

                <!-- SLIDE -->
                <li data-index="rs-3050" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/images/page/worker-01.png') }}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide color-white letter-spacing3px text-uppercase"
                         id="slide-3049-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-97','-90','-90','-100']"
                         data-fontsize="['55','50','42','35']"
                         data-lineheight="['72','64','50','40']"
                         data-fontweight="['700','600','600','500']"
                         data-width="['1000','900','600','400']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[10,10,10,10]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 16; white-space: nowrap;">@lang('public.index_heading')
                    </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title color-white"
                         id="slide-3049-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['33','50','40','30']"
                         data-fontsize="['18',18','16','14']"
                         data-lineheight="['32','28','28','24']"
                         data-fontweight="['500','400','400','400']"
                         data-width="['900','700','500','400']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 17; white-space: nowrap;">@lang('public.cultivating_intelligent_strategies')
                         {{--@lang('public.index_heading_caption')--}}
                    </div>

                    <a href="{{ route('service') }}" target="_self" class="tp-caption flat-button-slider bg-blue text-uppercase"

                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['center','center','center','center']" data-hoffset="['-100','-100','-100','-100']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['126','160','140','120']"
                       data-fontsize="['14','14','14','14']"
                       data-width="['auto']"
                       data-height="['auto']">@lang('public.get_started')
                    </a><!-- END LAYER LINK -->

                    <a href="{{ route('contact') }}" target="_self" class="tp-caption flat-button-slider bg-white text-uppercase"

                       data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'

                       data-x="['center','center','center','center']" data-hoffset="['100','100','100','100']"
                       data-y="['middle','middle','middle','middle']" data-voffset="['126','160','140','120']"
                       data-fontsize="['14',14','14','14']"
                       data-width="['auto']"
                       data-height="['auto']">@lang('public.contact_us')
                    </a>
                </li>

            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">@lang('public.trading_view')</span></a></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                },
                {
                    "description": "Bitcoin/Tetherus",
                    "proName": "BINANCE:BTCUSDT"
                },
                {
                    "description": "Gold",
                    "proName": "OANDA:XAUUSD"
                },
                {
                    "description": "SPDR S&P 500 ETF TRUST",
                    "proName": "AMEX:SPY"
                },
                {
                    "description": "TESLA, INC.",
                    "proName": "NASDAQ:TSLA"
                },
                {
                    "description": "U.S. DOLLAR/JAPANESE YEN",
                    "proName": "FX:USDJPY"
                },
                {
                    "description": "ETHEREUM/TETHERUS",
                    "proName": "BINANCE:ETHUSDT"
                },
                {
                    "description": "APPLE INC.",
                    "proName": "NASDAQ:AAPL"
                },
                {
                    "description": "NVIDIA CORPORATION",
                    "proName": "NASDAQ:NVDA"
                },
                {
                    "description": "AMAZON.COM INC.",
                    "proName": "NASDAQ:AMZN"
                },
                {
                    "description": "MICROSOFT CORPORATION",
                    "proName": "NASDAQ:MSFT"
                },
                {
                    "description": "META PLATFORMS, INC.",
                    "proName": "NASDAQ:META"
                },
                {
                    "description": "U.S. DOLLAR/CHINESE YUAN",
                    "proName": "FX_IDC:USDCNY"
                }
            ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <section class="flat-recent-market style2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrap-recent-text style3">
                        <h2 class="title">@lang('public.we_believe')</h2>
                        <div class="content-text text-justify">
                           <!-- <p>Clark Well Capital is a premier asset management group that specializes in proprietary trading. Our team consists of expert from several financial institutions. We leverage our experience, expertise, and cutting-edge trading technologies to deliver exceptional returns with minimized risk. We are dedicated to providing our clients with top-notch investment management services and exceptional returns on their investments.</p>
                            <p style="text-indent: 40px">With over 10 years of experience in private fund management services and proprietary trading, we have a proven track record of success in delivering consistent returns to our clients. Our team of experts has over 20 years of experience in financial quantitative analytics and trading, giving us a deep understanding of the complexities of the financial markets. We leverage our experience and expertise to identify investment opportunities and navigate market fluctuations to maximize returns while minimizing risk.</p>
                            <p style="text-indent: 40px">We understand that every investor has unique needs and goals, which is why we offer personalized solutions that are tailored to our clients' specific investment objectives. Our mastery of financial markets, combined with our personalized approach, enables us to turn our clients' investment dreams into reality. We are committed to delivering exceptional results and providing our clients with the peace of mind that comes with knowing their investments are in capable hands.</p>
                            <p style="text-indent: 40px">At Clark Well Capital, we believe that success is built on trust, transparency, and accountability. We are dedicated to building long-lasting relationships with our clients based on these core values. Come join us on this exciting journey to investment success and experience the difference that our expertise and personalized solutions can make for your portfolio.</p>
                           -->
                            <p>@lang('public.intro_text1')</p>
                            <p >@lang('public.intro_text2')</p>
                            <p >@lang('public.intro_text3')</p>
                        </div>
                    </div><!-- /.wrap-recent-text style3 -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-recent-market style2 -->

    <section class="flat-recent-market bg-browse">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-image center mb-4">
                        <img src="{{ asset('assets/images/page/laptop-1.jpg') }}" alt="">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="wrap-recent-text text-end">
                        <h2 class="title">@lang('public.harnessing')</h2>
                        <div class="content-text">
                           <p>@lang('public.harnessing_description')</p>
                           
                        </div>
                    </div><!-- /.wrap-recent-text -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-recent-market -->
<!--------------------Original Coding Why Clark Well ----------------------------->
 
<!--
    <section class="flat-why-choose style1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>Why Clark Well Capital?</h2>
                        <p>Clark Well Capital is an excellent choice for investors seeking exceptional returns on their investments. There are several reasons why you may want to consider partnering with us</p>
                    </div>
                </div>
       
                
  
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card-container">
                        <div class="custom-card">
                            <div class="front-content">
                                <p>Proprietary Trading Expertise</p>
                            </div>
                            <div class="content">
                                <p>
                                    Clark Well Capital excels in proprietary trading at the highest levels of the financial industry. Our team of experts has over 20 years of experience in financial quantitative analytics and trading, giving us a deep understanding of the complexities of the financial markets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    
         <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card-container">
                        <div class="custom-card">
                            <div class="front-content">
                                <p>Personalized Solutions</p>
                            </div>
                            <div class="content">
                                <p>
                                    We understand that every investor has unique needs and goals, which is why we offer personalized solutions that are tailored to our clients' specific investment objectives. Our personalized approach enables us to turn our clients' investment dreams into reality.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card-container">
                        <div class="custom-card">
                            <div class="front-content">
                                <p>Proven Track Record</p>
                            </div>
                            <div class="content">
                                <p>
                                    With over 15 years of experience in private fund management services, we have a proven track record of success in delivering consistent returns to our clients. We are committed to delivering exceptional results and providing our clients with the peace of mind that comes with knowing their investments are in capable hands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="card-container">
                        <div class="custom-card">
                            <div class="front-content">
                                <p>Commitment to Core Values</p>
                            </div>
                            <div class="content">
                                <p>
                                    At Clark Well Capital, we believe that success is built on trust, transparency, and accountability. We are dedicated to building long-lasting relationships with our clients based on these core values.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
    </section>
-->
<!--------------------Original Coding Why Clark Well ----------------------------->
<!---------------------------PASTE Coding------------------------------------------------------>
<section class="flat-why-choose style1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-title center">
                    <h2>@lang('public.why-weventure')</h2>
                </div>
            </div>
    
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div class="card-container">
                    <div class="custom-card">
                        <div class="front-content">
                            <p>@lang('public.multifunctional_trading')</p>
                        </div>
                        <div class="content">
                            <p>@lang('public.multifunctional_trading_text') </p>
                        </div>
                    </div>
                </div>
            </div>
<!-- /.col-md-12 -->
     <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div class="card-container">
                    <div class="custom-card">
                        <div class="front-content">
                            <p>@lang('public.data_science')</p>
                        </div>
                        <div class="content">
                            <p>@lang('public.data_science_text')</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-md-12 -->
       
            <div class="col-md-4 mb-4 d-flex justify-content-center">
                <div class="card-container">
                    <div class="custom-card">
                        <div class="front-content">
                            <p>@lang('public.customer_experience')</p>
                        </div>
                        <div class="content">
                            <p>@lang('public.customer_experience_text')</p>
                        </div>
                    </div>
                </div>
            </div>   
          
        </div>          
    </div>
</section>


<!---------------------------------------------------------------------------------->

    <section class="flat-call-back">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-call-back">
                        <div class="title">
                            <h2>@lang('public.consultant')</h2>
                            <p>@lang('public.consultant_caption-1')  <!--<a href="mailto:support@clarkwell.co" class="text-white-50">support@clarkwell.co </a>--><a href="mailto:@lang('public.email_weventure') " class="text-white-50">@lang('public.email_weventure')</a> @lang('public.consultant_caption-2').</p>
                        </div>
                        <div class="btn-call-back">
                            <a href="{{ route('contact') }}" title="">@lang('public.contact_us')</a>
                        </div>
                    </div><!-- /.wrap-call-back -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-call-back -->

    <section class="flat-our-work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 class="text-uppercase">@lang('public.intelligent_AI')</h2>
                       {{--<p>@lang('public.product_service_caption')</p>--}} 
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-7">
                    <div class="wrap-iconbox">
                        <div class="iconbox inline-left style4">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/ai-01.svg') }}" alt="">
                            </div>
                            <div class="number">
                                1
                            </div>
                            <div class="iconbox-content">
                                <h4 class="text-uppercase"><a href="#" title="">{{--@lang('public.fund_management_product')--}}@lang('public.neurotrade')</a></h4>
                                <p>{{--@lang('public.service_description-1')--}}@lang('public.neurotrade_description')</p>
                            </div>
                        </div><!-- /.iconbox style4 -->
                        <div class="iconbox inline-left style4">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/ai2-01.svg') }}" alt="">
                            </div>
                            <div class="number">
                                2
                            </div>
                            <div class="iconbox-content">
                                <h4 class="text-uppercase"><a href="#" title="">{{--@lang('public.financial_planning')--}}@lang('public.quantum')</a></h4>
                                <p>{{--@lang('public.service_description-2')--}}@lang('public.quantum_description')</p>
                            </div>
                        </div><!-- /.iconbox style4 -->
                        <div class="iconbox inline-left style4">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/ai3-01.svg') }}" alt="">
                            </div>
                            <div class="number">
                                3
                            </div>
                            <div class="iconbox-content">
                                <h4 class="text-uppercase"><a href="#" title="">{{--@lang('public.product_service_title-4')--}}@lang('public.genius_invest')</a></h4>
                                <p class="mb-2">{{--@lang('public.service_description-3')--}}@lang('public.genius_invest_description')</p>
                            </div>
                        </div><!-- /.iconbox style4 -->
                    </div><!-- /.wrap-iconbox -->
                </div><!-- /.col-md-6 -->
             <div class=" col-md-5 ">
                    <div class="single-image text-center mt-3">
                        <img src="{{ asset('assets/images/page/test-01-01.png') }}" alt="">
                    </div>
             </div>  <!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-our-work -->
@endsection
