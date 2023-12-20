@extends('layouts.master')

@section('title') @lang('public.core_value') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title text-uppercase">@lang('public.core_value')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.core_value')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="flat-recent-market">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>@lang('public.core_value')</h2>
                        <p>@lang('public.core_value_caption')</p>
                    </div>
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="iconbox inline-left style5">
                        <div class="number">
                            1
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/account.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <p>@lang('public.core_value_description-1')</p>
                        </div>
                    </div><!-- /.iconbox style5 -->
                </div><!-- /.col-md-5 -->
                <div class="col-md-6">
                    <div class="iconbox inline-left style5">
                        <div class="number">
                            2
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/payment.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <p>@lang('public.core_value_description-2')</p>
                        </div>
                    </div><!-- /.iconbox style5 -->
                </div><!-- /.col-md-5 -->
                <div class="col-md-6">
                    <div class="iconbox inline-left style5">
                        <div class="number">
                            3
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/orders.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <p>@lang('public.core_value_description-3')</p>
                        </div>
                    </div><!-- /.iconbox style5 -->
                </div><!-- /.col-md-5 -->
                <div class="col-md-6">
                    <div class="iconbox inline-left style5">
                        <div class="number">
                            4
                        </div>
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/orders.png') }}" alt="">
                        </div>
                        <div class="iconbox-content">
                            <p>@lang('public.core_value_description-4')</p>
                        </div>
                    </div><!-- /.iconbox style5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </section><!-- /.flat-recent-market -->

    <section class="flat-price-coin bg-browse">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 class="text-uppercase">@lang('public.vision_mission')</h2>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-6 mb-4">
                                <h4 class="mb-2">@lang('public.our_vision')</h4>
                                <p class="text-left">
                                    @lang('public.our_vision_description')
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-2">@lang('public.our_mission')</h4>
                                <p class="text-list text-left">
                                    @lang('public.our_mission_description-1')
                                    <br>
                                    @lang('public.our_mission_description-2')
                                    <br>
                                    @lang('public.our_mission_description-3')
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-price-coin -->

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

    <section class="flat-price-coin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2 class="text-uppercase">Exchange Rates</h2>
                        <p>Real-time currency exchange rates against USD</p>
                    </div>
                    <div class="table-price">
                        <table id="exchangeTable" data-locale="{{ App::getLocale() }}">
                            <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Name</th>
                                <th>USD</th>
                                <th>Last Updated</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div><!-- /.table-price -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-price-coin -->

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var symbols = ['BTC', 'ETH', 'XRP', 'LTC', 'XMR'];
            var locale = $('#exchangeTable').data('locale');

            // Check if data exists in localStorage
            if (localStorage.getItem('exchangeData')) {
                var exchangeData = JSON.parse(localStorage.getItem('exchangeData'));
                displayExchangeData(exchangeData, locale);
            } else {
                fetchExchangeData(symbols, locale);
            }

            function fetchExchangeData(symbols, locale) {
                var promises = symbols.map(function(symbol) {
                    var apiUrl = 'https://www.alphavantage.co/query?function=CURRENCY_EXCHANGE_RATE&from_currency=' + symbol + '&to_currency=USD&apikey=4ZJR5E5WXUQ8HLM4';
                    return fetch(apiUrl)
                        .then(response => response.json())
                        .then(data => {
                            return {
                                symbol: symbol,
                                data: data
                            };
                        })
                        .catch(error => {
                            console.error('Failed to fetch data for symbol: ' + symbol);
                        });
                });

                Promise.all(promises)
                    .then(function(results) {
                        var exchangeData = {};
                        results.forEach(function(result) {
                            exchangeData[result.symbol] = result.data;
                        });
                        // Store data in localStorage
                        localStorage.setItem('exchangeData', JSON.stringify(exchangeData));
                        displayExchangeData(exchangeData, locale);
                    });
            }

            function displayExchangeData(exchangeData, locale) {
                // Clear the table's contents
                $('#exchangeTable tbody').empty();

                Object.keys(exchangeData).forEach(function(symbol) {
                    var data = exchangeData[symbol]['Realtime Currency Exchange Rate'];

                    var name = data['2. From_Currency Name'];
                    var usdRate = parseFloat(data['5. Exchange Rate']).toLocaleString(locale);
                    var lastUpdate = new Date(data['6. Last Refreshed']);

                    var lastUpdateFormatted = lastUpdate.toLocaleString(locale, {
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit',
                        hour: '2-digit',
                        minute: '2-digit',
                        second: '2-digit',
                        hour12: true
                    });

                    var row = '<tr>';
                    row += '<td>' + symbol + '</td>';
                    row += '<td>' + name + '</td>';
                    row += '<td>' + usdRate + '</td>';
                    row += '<td class="text-primary">' + 'UTC ' + lastUpdateFormatted + '</td>';
                    row += '</tr>';

                    // Append the row to the table
                    $('#exchangeTable tbody').append(row);
                });
            }
        });

    </script>
@endsection
