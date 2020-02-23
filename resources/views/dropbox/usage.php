<section class="docs-section" id="item-1-3">
    <h2 class="section-heading">Usage</h2>

A routes example:

<pre><code class="language-php">
Route::get('box', function() {

    //if no box token exists then redirect
    if (!is_string(Box::getAccessToken())) {
        return redirect('box/oauth');
    } else {
        //box authenticated now box:: can be used freely.

        //example of getting the authenticated users details
        return Box::get('/users/me');
    }
});

Route::get('box/oauth', function() {
    return Box::connect();
});
</code></pre>

<p>Calls can be made by referencing Box:: then the verb get,post,put,patch or delete followed by the end point to call. An array can be passed as a second option.</p>

<p>The end points are relative paths after https://api.box.com/2.0/</p>

<p>Example GET request</p>

<pre><code class="language-php">
Box::get('users/me');
</code></pre>

<p>Example POST request</p>

<pre><code class="language-php">
Box::post('folders', [
    'name' => 'name of the folder',
    'parent' => [
        'id' => 0
    ]
]);
</code></pre>

<p>The formula is:</p>

<pre><code class="language-php">
Box::get('path', $array);
Box::post('path', $array);
Box::put('path', $array);
Box::patch('path', $array);
Box::delete('path', $array);
</code></pre>


</section>
