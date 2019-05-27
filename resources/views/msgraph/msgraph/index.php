<h2>Usage for MsGraph</h2>

<p><b>Note this package expects a user to be logged in.</b></p>

<p>A routes example:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'auth']], function(){
    Route::get('msgraph', function(){

        if (! is_string(MsGraph::getAccessToken())) {
            return redirect(env('MSGRAPH_OAUTH_URL'));
        } else {
            //display your details
            return MsGraph::get('me');
        }

    });

    Route::get('msgraph/oauth', function(){
        return MsGraph::connect();
    });
});
</code></pre>

<p>Or using a middleware route, if user does not have a graph token then automatically redirect to get authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'MsGraphAuthenticated']], function(){
    Route::get('msgraph', function(){
        return MsGraph::get('me');
    });
});

Route::get('msgraph/oauth', function(){
    return MsGraph::connect();
});
</code></pre>

<p>Once authenticated you can call MsGraph:: with the following verbs:</p>
<pre><code class="language-php">
MsGraph::get($endpoint, $array = [], $id = null)
MsGraph::post($endpoint, $array = [], $id = null)
MsGraph::put($endpoint, $array = [], $id = null)
MsGraph::patch($endpoint, $array = [], $id = null)
MsGraph::delete($endpoint, $array = [], $id = null)
</code></pre>

<p>The second param of array is not always required, its requirement is determined from the endpoint being called, see the API documentation for more details.</p>
<p>The third param $id is optional when used the access token will be attempted to be retrieved based on the id. When omitted the logged in user will be used.</p>
<p>These expect the API endpoints to be passed, the url https://graph.microsoft.com/beta/ is provided, only endpoints after this should be used ie:</p>

<pre><code class="language-php">
MsGraph::get('me/messages')
</code></pre>

<h3>Middleware</h3>

<p>To restrict access to routes only to authenticated users there is a middleware route called <b>MsGraphAuthenticated</b></p>

<p>Add <b>MsGraphAuthenticated</b> to routes to ensure the user is authenticated:</p>
<pre><code class="language-php">
Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], function()
</code></pre>

<p>To access token model reference this ORM model:</p>
<pre><code class="language-php">
use Daveismyname\MsGraph\Models\MsGraphToken;
</code></pre>


