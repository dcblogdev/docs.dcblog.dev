<section class="docs-section" id="item-1-1">
    <h2 class="section-heading">Application Register</h2>
  
    <p>To use Microsoft Graph API an application needs creating.</p>
    <p>Sign in to the <a href="https://portal.azure.com/">https://portal.azure.com/</a> using either a work or school account or a personal Microsoft account.</p>
    <p>If your account gives you access to more than one tenant, select your account in the top right corner, and set your portal session to the Azure AD tenant that you want.</p>
    <p>In the left-hand navigation pane, select the Azure Active Directory service, and then select App registrations > New registration.</p>

    <p>When the Register an application page appears, enter your application's registration information:</p>
    <p>Name - Enter a meaningful application name that will be displayed to users of the app.</p>
    <p>Supported account types - Select which accounts you would like your application to support.</p>
    <p>Enter you desired redirect url. This is the url your application will use to connect to Graph API.</p>

    <p><img src="<?=url('msgraph/registerapp.png');?>" class="img-fluid"> </p>
    <p>Next click Register on the next page take a note of the Application (client) ID.</p>

    <p>Add the following to your .env file, change the domain to match your own.</p>

    <pre><code class="language-php">
    MSGRAPH_CLIENT_ID=
    MSGRAPH_SECRET_ID=
    MSGRAPH_OAUTH_URL=http://domain.com/msgraph/oauth
    MSGRAPH_LANDING_URL=http://domain.com/msgraph
    </code></pre>

    <p>Add the client id to the .env file.</p>

    <p>Next click Certificate & Secrets and click new client secret</p>
    <p>Enter a description and expiration option. Copy secret to .env</p>

    <p>Now go to API Permissions. click add a permissions.</p>
    <p>First select the group type followed by the permision. For instance when working with emails select the exchange group.</p>
    
</section>