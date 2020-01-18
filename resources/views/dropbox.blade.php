@extends('layouts.app')

@section('title', 'Packages Docs')

@section('meta')
@php
$title = 'Laravel Packages Docs - '.config('app.name');
$description = 'Documentation for my Laravel packages';
@endphp
<meta itemprop="name" content="{{ $title }}">
<meta itemprop="description" content="{{ $description }}">

<meta name='description' content='{{ $description }}'>
<meta property='og:description' content='{{ $description }}'>
<meta property='og:title' content='{{ $title }}'>
<meta property='og:type' content='article'>
<meta property='og:url' content='{{ url()->current() }}'>
<meta property="og:site_name" content="Dave is my name" />

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@daveismynamecom">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:creator" content="@daveismynamecom">
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

			    <footer class="footer">
				    <div class="container text-center py-5">
				        <small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
				        <ul class="social-list list-unstyled pt-4 mb-0">
						    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
				            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
				        </ul><!--//social-list-->
				    </div>
			    </footer>
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