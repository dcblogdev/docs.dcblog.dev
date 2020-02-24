<section class="docs-section" id="item-1-2">
    <h2 class="section-heading">Install</h2>
  

<h3>Via Composer</h3>

<pre><code class="language-php">composer require dcblogdev/laravel-microsoft-graph</code></pre>

<h3>Config</h3>
<p>You can publish the config file with:</p>
<pre><code class="language-php">php artisan vendor:publish --provider="Dcblogdev\MsGraph\MsGraphServiceProvider" --tag="config"</code></pre>

<p>When published, the config/msgraph.php config file contains:</p>
<pre><code class="language-php">
return [

    /*
    * the clientId is set from the Microsoft portal to identify the application
    * https://apps.dev.microsoft.com
    */
    'clientId' => env('MSGRAPH_CLIENT_ID'),

    /*
    * set the application secret
    */

    'clientSecret' => env('MSGRAPH_SECRET_ID'),

    /*
    * Set the url to trigger the oauth process this url should call return MsGraph::connect();
    */
    'redirectUri' => env('MSGRAPH_OAUTH_URL'),

    /*
    * set the url to be redirected to once the token has been saved
    */

    'msgraphLandingUri'  => env('MSGRAPH_LANDING_URL'),

    /*
    set the tenant authorize url
    */

    'tenantUrlAuthorize' => env('MSGRAPH_TENANT_AUTHORIZE'),

    /*
    set the tenant token url
    */
    'tenantUrlAccessToken' => env('MSGRAPH_TENANT_TOKEN'),

    /*
    set the authorize url
    */

    'urlAuthorize' => 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize',

    /*
    set the token url
    */
    'urlAccessToken' => 'https://login.microsoftonline.com/common/oauth2/v2.0/token',

    /*
    set the scopes to be used, Microsoft Graph API will accept up to 20 scopes
    */

    'scopes' => 'offline_access openid calendars.readwrite contacts.readwrite files.readwrite mail.readwrite mail.send tasks.readwrite mailboxsettings.readwrite user.readwrite',

    /*
    The default timezone is set to Europe/London this option allows you to set your prefered timetime
    */
    'preferTimezone' => env('MSGRAPH_PREFER_TIMEZONE', 'outlook.timezone="Europe/London"'),
];
</code></pre>

<h3>Migration</h3>
<p>You can publish the migration with:</p>
<pre><code class="language-php">
php artisan vendor:publish --provider="Dcblogdev\MsGraph\MsGraphServiceProvider" --tag="migrations"
</code></pre>

<p>After the migration has been published you can create the tokens tables by running the migration:</p>
<pre><code class="language-php">
php artisan migrate
</code></pre>

<h3>.ENV Configuration</h3>
<p>Ensure you've set the following in your .env file:</p>
<pre><code class="language-php">
MSGRAPH_CLIENT_ID=
MSGRAPH_SECRET_ID=

MSGRAPH_OAUTH_URL=https://domain.com/msgraph/oauth
MSGRAPH_LANDING_URL=https://domain.com/msgraph
</code></pre>

<p>When logging in as a tenant add the tenant ID .env:</p>
<pre><code class="language-php">
MSGRAPH_TENANT_AUTHORIZE=https://login.microsoftonline.com/{tenant_id}/adminconsent
MSGRAPH_TENANT_TOKEN=https://login.microsoftonline.com/{tenant_id}/oauth2/v2.0/token
</code></pre>

<p>To find your Office 365 tenant ID in the Azure AD admin center</p>

<ol>
    <li>Sign in to the Azure Active Directory admin center <a href="https://aad.portal.azure.com/#blade/Microsoft_AAD_IAM/ActiveDirectoryMenuBlade/Overview">https://aad.portal.azure.com/#blade/Microsoft_AAD_IAM/ActiveDirectoryMenuBlade/Overview</a> as a global or user management admin.</li>
    <li>Under Manage, select Properties. The tenant ID is shown in the Directory ID box.</li>
</ol>

<p>Optionally add</p>
<pre><code class="language-php">
MSGRAPH_PREFER_TIMEZONE='outlook.timezone="Europe/London"'
</code></pre>

</section>
