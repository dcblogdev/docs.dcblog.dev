<section class="docs-section" id="item-1-2">
    <h2 class="section-heading">Install</h2>
    
<h3>Via Composer</h3>

<pre><code class="language-php">composer require dcblogdev/laravel-box</code></pre>

<p>In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in config/app.php file</p>
<pre><code class="language-php">
'providers' => [
    // ...
    Dcblogdev\Box\BoxServiceProvider::class,
];
</code></pre>

<h3>Config</h3>
<p>You can publish the config file with:</p>
<pre><code class="language-php">php artisan vendor:publish --provider="Dcblogdev\Box\BoxServiceProvider" --tag="config"</code></pre>

<p>When published, the config/box.php config file contains:</p>
<pre><code class="language-php">
return [
    'clientId'       => env('BOX_CLIENT_ID'),
    'clientSecret'   => env('BOX_SECRET_ID'),
    'redirectUri'    => env('BOX_REDIRECT_URI'),
    'boxLandingUri'  => env('BOX_LANDING_URI'),
    'urlAuthorize'   => 'https://account.box.com/api/oauth2/authorize',
    'urlAccessToken' => 'https://www.box.com/api/oauth2/token',
];
</code></pre>

<h3>Migration</h3>
<p>You can publish the migration with:</p>
<pre><code class="language-php">
php artisan vendor:publish --provider="Dcblogdev\Box\BoxServiceProvider" --tag="migrations"
</code></pre>

<p>After the migration has been published you can create the tokens tables by running the migration:</p>
<pre><code class="language-php">
php artisan migrate
</code></pre>

<h3>.ENV Configuration</h3>
<p>You should add the env variables to your .env file, this allows you to use a different box application on different servers, each box application requires a unique callback uri.</p>

<p>The follow are required when using OAuth 2.0 credentials:</p>

The `BOX_REDIRECT_URI` is where Box should redirect to for authentication with Box, upon successful authentication the `BOX_LANDING_URI` is used to direct a user to a desired page.

> Note BOX_REDIRECT_URI needs to be the full URI ie https://domain.com/box/

<pre><code class="language-php">
BOX_CLIENT_ID=
BOX_SECRET_ID=
BOX_REDIRECT_URI=https://domain.com/dropbox/oauth
BOX_LANDING_URI=https://domain.com/dropbox
</code></pre>

</section>


