<section class="docs-section" id="item-1-3">
    <h2 class="section-heading">Usage</h2>

<h3>Import Namespace</h3>
<pre><code class="language-php">
use Dcblogdev\Eventbrite\Facades\Eventbrite;
</code></pre>

A routes example:

<pre><code class="language-php">
Route::get('eventbrite', function() {

    //get all events
    Eventbrite::events(); 
    
});
</code></pre>

<p>Calls can be made by referencing Eventbrite:: then the verb get,post,put,patch or delete followed by the end point to call. An array can be passed as a second option.</p>

<p>The end points are relative paths after https://www.eventbriteapi.com/v3/</p>

<p>Example GET request</p>

<pre><code class="language-php">
Eventbrite::get('users/me/organizations');
</code></pre>

<p>The formula is:</p>

<pre><code class="language-php">
Eventbrite::get('path', $array);
Eventbrite::post('path', $array);
Eventbrite::put('path', $array);
Eventbrite::patch('path', $array);
Eventbrite::delete('path', $array);
</code></pre>

</section>
