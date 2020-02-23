@extends('layouts.app')

@section('title', 'Packages Docs')

@section('meta')
@php
$title = 'Packages Docs - '.config('app.name');
$description = 'Documentation for my packages';
@endphp
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $description }}">

<meta name='description' content='{{ $description }}'>
<meta property='og:description' content='{{ $description }}'>
<meta property='og:title' content='{{ $title }}'>
<meta property='og:type' content='article'>
<meta property='og:url' content='{{ url()->current() }}'>
<meta property="og:site_name" content="DC Blog" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@dcblogdev">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:creator" content="@dcblogdev">

@stop

@section('content')

<div class="page-header theme-bg-dark py-5 text-center position-relative">
    <div class="theme-bg-shapes-right"></div>
    <div class="theme-bg-shapes-left"></div>
    <div class="container">
        <h1 class="page-heading single-col-max mx-auto">Packages Documentation</h1>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="docs-overview py-5">

            <?php /*<h2 class="text-center">PHP Packages</h2>

            <div class="row justify-content-center">

                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="card-title-text">PDO Wrapper</span>
                            </h5>
                            <div class="card-text">
                                A crud wrapper for PDO
                            </div>
                            <a class="card-link-mask" href="/pdo-wrapper"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->

            </div>*/ ?>

            <h2 class="text-center">Laravel Packages</h2>

            <div class="row">

                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="card-title-text">Laravel Dropbox</span>
                            </h5>
                            <div class="card-text">
                                Laravel package for V2 Dropbox API
                            </div>
                            <a class="card-link-mask" href="/laravel-dropbox"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->

                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="card-title-text">Laravel Box</span>
                            </h5>
                            <div class="card-text">
                                Laravel package for Box API
                            </div>
                            <a class="card-link-mask" href="/laravel-box"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->

                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="card-title-text">Laravel Microsoft Graph</span>
                            </h5>
                            <div class="card-text">
                                Laravel package for Microsoft Graph API (Office365)
                            </div>
                            <a class="card-link-mask" href="/laravel-microsoft-graph"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->

                <div class="col-12 col-lg-4 py-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">
                                <span class="card-title-text">Laravel Eventbrite</span>
                            </h5>
                            <div class="card-text">
                                Laravel package for Eventbrite API
                            </div>
                            <a class="card-link-mask" href="/laravel-eventbrite"></a>
                        </div><!--//card-body-->
                    </div><!--//card-->
                </div><!--//col-->

            </div>
            
        </div><!--//container-->
    </div><!--//container-->
</div>

@stop