@extends('layouts.master')

@section('title') @lang('public.contact') @endsection

@section('content')
    <div class="page-title">
        <div class="title-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">
                            <h1 class="h1-title text-uppercase">@lang('public.contact_us')</h1>
                        </div><!-- /.page-title-heading -->
                        <ul class="breadcrumbs">
                            <li><a href="#" title="">@lang('public.home')</a></li>
                            <li class="dot">/</li>
                            <li>@lang('public.contact_us')</li>
                        </ul><!-- /.breadcrumbs -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.title-heading -->
    </div><!-- /.page-title -->

    <section class="flat-row flat-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>@lang('public.contact_with_us')</h2>
                        <p>@lang('public.contact_us_caption',['email' => 'support@clarkwell.co'])</p>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                    @endif
                    <div class="form-contact-form">
                        <form action="{{ route('send_mail') }}" method="post" accept-charset="utf-8">
                            @csrf
                            <div id="subscribe-content-1">
                                <div class="field-row">
                                    <div class="contact-form-name contact-form">
                                        <input type="text" name="name" id="name" placeholder="@lang('public.your_name')" required />
                                    </div>
                                    <div class="contact-form-email contact-form">
                                        <input type="email" name="email" id="email" placeholder="@lang('public.your_email')" required />
                                    </div>
                                </div>
                                <div class="contact-form-comment contact-form">
                                    <textarea name="message" id="message" placeholder="@lang('public.your_message')" required></textarea>
                                </div>
                                <div class="btn-contact-form center">
                                    <button type="submit" class="flat-button-form border-radius-2 text-uppercase">@lang('public.send_message')</button>
                                </div>
                            </div>
                        </form><!-- /form -->
                    </div><!-- /.form-contact-form -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-contact-form -->
@endsection

