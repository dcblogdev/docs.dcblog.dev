<section class="docs-section" id="item-1-3">
    <h2 class="section-heading">Usage</h2>

<p><b>Note this package expects a user to be logged in.</b></p>

<p>Note: these examples assume the authentication is using the oauth2 and not setting the access toekn in the .env directly.</p>

<p>If setting the access code directly don't rely on Dropbox::getAccessToken()</p>

<p>A routes example:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('dropbox', function(){

        if (! is_string(Dropbox::getAccessToken())) {
            return redirect(env('DROPBOX_OAUTH_URL'));
        } else {
            //display your details
            return Dropbox::get('users/get_current_account');
        }

    });

    Route::get('dropbox/oauth', function(){
        return Dropbox::connect();
    });
});
</code></pre>

<p>Or using a middleware route, if user does not have a graph token then automatically redirect to get authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'DropboxAuthenticated']], function(){
    Route::get('dropbox', function(){
        return Dropbox::get('users/get_current_account');
    });
});

Route::get('dropbox/oauth', function(){
    return Dropbox::connect();
});
</code></pre>

<p>Once authenticated you can call Dropbox:: with the following verbs:</p>
<pre><code class="language-php">
Dropbox::get($endpoint, $array = [], $headers = [], $useToken = true)
Dropbox::post($endpoint, $array = [], $headers = [], $useToken = true)
Dropbox::put($endpoint, $array = [], $headers = [], $useToken = true)
Dropbox::patch($endpoint, $array = [], $headers = [], $useToken = true)
Dropbox::delete($endpoint, $array = [], $headers = [], $useToken = true)
</code></pre>

<p>The $array is not always required, its requirement is determined from the endpoint being called, see the API documentation for more details.</p>
<p>The $headers is optional when used can pass in additional headers.</p>
<p>The $useToken is optional when set to true will use the authorisation header, defaults to true.</p>
<p>These expect the API endpoints to be passed, the url https://api.dropboxapi.com/2/ is provided, only endpoints after this should be used ie:</p>

<pre><code class="language-php">
Dropbox::get('users/get_current_account')
</code></pre>

<h3>Middleware</h3>

<p>To restrict access to routes only to authenticated users there is a middleware route called <b>DropboxAuthenticated</b></p>

<p>Add <b>DropboxAuthenticated</b> to routes to ensure the user is authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'DropboxAuthenticated'], function()
</code></pre>

<p>To access token model reference this ORM model:</p>
<pre><code class="language-php">
use Daveismyname\Dropbox\Models\DropboxToken;
</code></pre>

</section>
