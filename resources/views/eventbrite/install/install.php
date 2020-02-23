<section class="docs-section" id="item-1-2">
    <h2 class="section-heading">Install</h2>
    
<h3>Via Composer</h3>

<pre><code class="language-php">composer require dcblogdev/laravel-eventbrite</code></pre>

<h3>Config</h3>
<p>You can publish the config file with:</p>
<pre><code class="language-php">php artisan vendor:publish --provider="Dcblogdev\Eventbrite\EventbriteServiceProvider" --tag="config"</code></pre>

<p>When published, the config/box.php config file contains:</p>
<pre><code class="language-php">
return [
    'key' => env('EVENTBRITE_KEY'),
    'org' => env('EVENTBRITE_ORG_ID'),
];
</code></pre>

<h3>.ENV Configuration</h3>
<p>You should add the env variables to your .env file, this allows you to use a different application on different servers.</p>

<p>EVENTBRITE_KEY needs your application key</p>
<p>EVENTBRITE_ORG_ID can be used to set your organisation.</p>

<pre><code class="language-php">
EVENTBRITE_KEY=
EVENTBRITE_ORG_ID=
</code></pre>

</section>


