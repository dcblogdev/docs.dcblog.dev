<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Documentation for Laravel packages">
    <meta name="author" content="David Carr">  
    <meta name="google-site-verification" content="O21b-m-uzSO4yp3rwdyO2fYzM9DPYhMoCujOe_zLdtM" />
    @yield('meta')  
    <link rel="canonical" href='{{ url()->current() }}'>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    @yield('css')
    <script defer src="/assets/fontawesome/js/all.min.js"></script> 
    <link id="theme-style" rel="stylesheet" href="/assets/css/theme.css">
</head> 
<body>

<header class="header fixed-top">	    
	<div class="branding">
		<div class="container-fluid position-relative">
			<nav class="navbar navbar-expand-lg" >
				<div class="site-logo"><a class="navbar-brand" href="/"><img class="logo-icon mr-2" src="assets/images/site-logo.svg" alt="logo"><span class="logo-text">Packages<span class="text-alt">Docs</span></span></a></div>    

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span> </span>
					<span> </span>
					<span> </span>
				</button>
				
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="social-list list-inline mt-3 mt-lg-0 mb-lg-0 d-flex ml-lg-5 mr-lg-5">
						<li class="list-inline-item"><a href="https://github.com/sponsors/daveismyname" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/daveismynamecom" target="_blank"><i class="fab fa-twitter fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/davidcarrblog" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
					</ul><!--//social-list-->
					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item mr-lg-4">
							<a class="nav-link" href="/">Packages</a>
						</li>
						<li class="nav-item dropdown active mr-lg-4">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Packages Docs
							</a>
							<div class="dropdown-menu dropdown-menu-right rounded shadow menu-animate slideIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item has-icon" href="/laravel-dropbox"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs fa-fw"></i></span>Laravel Dropbox API</a>
								<a class="dropdown-item has-icon" href="/laravel-microsoft-graph"><span class="theme-icon-holder mr-2"><i class="fas fa-arrow-down fa-fw"></i></span>Laravel Microsoft Graph API</a>
								
							</div>
						</li>
						<li class="nav-item mr-lg-4">
							<a class="nav-link" href="https://daveismyname.blog" target="_blank">Blog</a>
						</li>
						<li class="nav-item mr-lg-4">
							<a class="nav-link" href="https://github.com/sponsors/daveismyname" target="_blank">GitHub</a>
						</li>
						<li class="nav-item mr-lg-0">
							<a class="nav-link" href="https://daveismyname.blog/contact" target="_blank">Contact</a>
						</li>
					</ul>
				</div>
			</nav>

		</div><!--//container-->
	</div><!--//branding-->
</header><!--//header-->