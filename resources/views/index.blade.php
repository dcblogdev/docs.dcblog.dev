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

            <h2 class="text-center">PHP Packages</h2>

            <div class="row">

                @foreach(config('packages.php') as $pack)

                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="card-title-text">{{ $pack['title'] }}</span>
                                </h5>
                                <div class="card-text">
                                    {{ $pack['desc'] }}
                                </div>
                                <a class="card-link-mask" href="{{ $pack['slug'] }}"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->

                @endforeach

            </div>

            <br>

            <h2 class="text-center">Laravel Packages</h2>

            <div class="row">

                @foreach(config('packages.laravel') as $pack)

                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="card-title-text">{{ $pack['title'] }}</span>
                                </h5>
                                <div class="card-text">
                                    {{ $pack['desc'] }}
                                </div>
                                <a class="card-link-mask" href="{{ $pack['slug'] }}"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->

                @endforeach

            </div>
            
        </div><!--//container-->
    </div><!--//container-->
</div>

@stop