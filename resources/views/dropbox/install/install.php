<section class="docs-section" id="item-1-2">
    <h2 class="section-heading">Install</h2>
    
<h3>Via Composer</h3>

<pre><code class="language-php">composer require dcblogdev/laravel-dropbox</code></pre>

<p>In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in config/app.php file</p>
<pre><code class="language-php">
'providers' => [
    // ...
    Dcblogdev\Dropbox\DropboxServiceProvider::class,
];
</code></pre>

<h3>Config</h3>
<p>You can publish the config file with:</p>
<pre><code class="language-php">php artisan vendor:publish --provider="Dcblogdev\Dropbox\DropboxServiceProvider" --tag="config"</code></pre>

<p>When published, the config/dropbox.php config file contains:</p>
<pre><code class="language-php">
return [

    /*
    * set the client id
    */
    'clientId' => env('DROPBOX_CLIENT_ID'),

    /*
    * set the client secret
    */
    'clientSecret' => env('DROPBOX_SECRET'),

    /*
    * Set the url to trigger the oauth process this url should call return MsGraph::connect();
    */
    'redirectUri' => env('DROPBOX_OAUTH_URL'),

    /*
    * Set the url to redirecto once authenticated;
    */
    'landingUri' => env('DROPBOX_LANDING_URL', '/'),

    /**
     * Set access token, when set will bypass the oauth2 process
     */
    'accessToken' => env('DROPBOX_ACCESS_TOKEN', ''),
];
</code></pre>

<h3>Migration</h3>
<p>You can publish the migration with:</p>
<pre><code class="language-php">
php artisan vendor:publish --provider="Dcblogdev\Dropbox\DropboxServiceProvider" --tag="migrations"
</code></pre>

<p>After the migration has been published you can create the tokens tables by running the migration:</p>
<pre><code class="language-php">
php artisan migrate
</code></pre>

<h3>.ENV Configuration</h3>
<p>Ensure you've set the following in your .env file:</p>
<pre><code class="language-php">
DROPBOX_CLIENT_ID=
DROPBOX_SECRET_ID=
DROPBOX_OAUTH_URL=https://domain.com/dropbox/oauth
DROPBOX_LANDING_URL=https://domain.com/dropbox
</code></pre>

<h3>Bypass Oauth2</h3>
<p>You can bypass the oauth2 process by generating an access token in your dropbox app and entering it on the .env file:</p>
<pre><code class="language-php">
DROPBOX_ACCESS_TOKEN=
</code></pre>

</section>


