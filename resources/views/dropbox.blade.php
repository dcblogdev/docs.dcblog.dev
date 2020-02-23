@extends('layouts.app')

@section('title', 'Laravel Dropbox')

@section('meta')
@php
$title = 'Laravel Box - '.config('app.name');
$description = 'Documentation for DC Blog Laravel Dropbox package';
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/github.min.css"
@stop

@section('content')

<div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar">
		    <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
            </div>
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">
				    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>Introduction</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Application Register</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Install</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Usage</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">Working with Files</a></li>
				    
			    </ul>

		    </nav><!--//docs-nav-->
	    </div><!--//docs-sidebar-->
	    <div class="docs-content">
		    <div class="container">
			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
                        
                    @include('dropbox/index')
                    @include('dropbox/install/app')
                    @include('dropbox/install/install')
                    @include('dropbox/usage')
                    @include('dropbox/resources/files')
						
			    </article><!--//docs-article-->

		    </div> 
	    </div>
    </div><!--//docs-wrapper-->
    
   
       
    <!-- Javascript -->          
    <script src="/assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="/assets/plugins/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="/assets/js/highlight-custom.js"></script> 
    <script src="/assets/plugins/jquery.scrollTo.min.js"></script>
    <script src="/assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script> 
    <script src="/assets/js/docs.js"></script>

@stop