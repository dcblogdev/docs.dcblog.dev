<section class="docs-section" id="item-1-4">
    <h2 class="section-heading">Usage for MsGraphAdmin</h2>

<p><b>Only administrators can login as tenants.</b></p>

<p>A routes example:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('msgraph', function(){

        if (! is_string(MsGraphAdmin::getAccessToken())) {
            return redirect(env('MSGRAPH_OAUTH_URL'));
        } else {
            //display all users
            return MsGraphAdmin::get('users');
        }

    });

    Route::get('msgraph/oauth', function(){
        return MsGraphAdmin::connect();
    });
});
</code></pre>

<p>Or using a middleware route, if user does not have a graph token then automatically redirect to get authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'MsGraphAdminAuthenticated']], function(){
    Route::get('msgraph', function(){
        //fetch all users
        return MsGraphAdmin::get('users');
    });
});

Route::get('msgraph/oauth', function(){
    return MsGraphAdmin::connect();
});
</code></pre>

<p>Once authenticated you can call MsGraph:: with the following verbs:</p>
<pre><code class="language-php">
MsGraphAdmin::get($endpoint, $array = [])
MsGraphAdmin::post($endpoint, $array = [])
MsGraphAdmin::put($endpoint, $array = [])
MsGraphAdmin::patch($endpoint, $array = [])
MsGraphAdmin::delete($endpoint, $array = [])
</code></pre>

<p>The second param is array is not always required, its requirement is determined from the endpoint being called, see the API documentation for more details.</p>
<p>These expect the API endpoints to be passed, the url https://graph.microsoft.com/beta/ is provided, only endpoints after this should be used ie:</p>

<pre><code class="language-php">
MsGraphAdmin::get('users')
</code></pre>

<h3>Middleware</h3>

<p>To restrict access to routes only to authenticated users there is a middleware route called <b>MsGraphAdminAuthenticated</b>
<p>Add <b>MsGraphAdminAuthenticated</b> to routes to ensure the user is authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'MsGraphAdminAuthenticated'], function()
</code></pre>

<p>To access token model reference this ORM model:</p>
<pre><code class="language-php">
use Daveismyname\MsGraph\Models\MsGraphToken;
</code></pre>

</section>
