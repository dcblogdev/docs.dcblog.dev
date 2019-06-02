<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name='description' content="Documentation for David Carr's Packages">
    <meta property='og:description' content="Documentation for David Carr's Packages">
    <meta property='og:title' content='Packages Docs'>
    <meta property='og:type' content='article'>
    <meta property='og:url' content='https://docs.daveismyname.blog'>
    <title>Packages Docs</title>
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <!-- Le styles -->
    <link href="{{ url('devdocs/css/bootswatch/Cosmo/bootstrap.min.css') }}" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/black-tie/jquery-ui.css" rel="stylesheet">
    <link href="{{ url('devdocs/css/jquery.tocify.css') }}" rel="stylesheet">
    <link href="{{ url('devdocs/css/styles.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://daveismyname.blog/default/assets/css/prism.css" media="screen" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link href="{{ url('devdocs/assets/ico/favicon.ico') }}" rel="shortcut icon">
    <link href="{{ url('devdocs/assets/ico/apple-touch-icon-144-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="{{ url('devdocs/assets/ico/apple-touch-icon-114-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="{{ url('devdocs/assets/ico/apple-touch-icon-72-precomposed.png') }}" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="{{ url('devdocs/assets/ico/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon-precomposed">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom:120px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Packages Docs</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="pull-right nav navbar-nav">
          <li><a href="https://daveismyname.blog">daveismyname.blog</a></li>
          <li><a href="https://github.com/daveismyname/">GitHub</a></li>
          <li><a href="https://twitter.com/daveismynamecom/">Twitter</a></li>
          <li><a href="https://www.facebook.com/davidcarrblog/">Facebook</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container-fluid" style="margin-top:50px;">
    <div class="row">
        <div class="tocify col-sm-3 col-md-3">
            <div id="toc">
            </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9 col-md-9">

            <h2>Laravel Packages</h2>

            <h3><a href="/laravel-dropbox">Laravel Dropbox</a></h3>
            <p>Laravel package for V2 Dropbox API</p>

            <h3><a href="/laravel-microsoft-graph">Laravel Microsoft Graph</a></h3>
            <p>Laravel package for Microsoft Graph API (Office365)</p>

        </div>
    </div><!--/row-->

</div><!--/.fluid-container-->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://daveismyname.blog/default/assets/js/prism.js"></script>
<script src="{{ url('devdocs/js/jquery.min.js') }}"></script>
<script src="{{ url('devdocs/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('devdocs/js/bootstrap.min.js') }}"></script>
<script src="{{ url('devdocs/js/jquery.tocify.min.js') }}"></script>

<script>
    $(function() {

        $("#toc").tocify({ selectors: "h2, h3, h4", scrollTo: 60, highlightOffset: 60, extendPage: true });

        $(".optionName").popover({ trigger: "hover", container: "body" });

        $("a[href='#']").click(function(event) {

            event.preventDefault();

        });

    });
</script>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127420614-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127420614-4');
</script>

</body>
</html>
