<section class="docs-section" id="item-1-1">
    <h2 class="section-heading">Application Register</h2>
  
    <p>To use Microsoft Graph API an application needs creating at <a href="https://apps.dev.microsoft.com">https://apps.dev.microsoft.com</a></p>
    <p><img src="<?=url('msgraph/createapp.png');?>" class="img-fluid"> </p>
    <p>Create a new application, name the application. Click continue the Application Id will then be displayed.</p>
    <p><img src="<?=url('msgraph/appid.png');?>" class="img-fluid"> </p>
    <p>Next click Generate New Password under Application Secrets it won't be shown again so ensure you've copied it and added to .env more details further down.</p>

    <pre><code class="language-php">
    MSGRAPH_CLIENT_ID=
    MSGRAPH_SECRET_ID=
    </code></pre>

    <p>Now click Add Platform under Platforms and select web.</p>
    <p>Enter you desired redirect url. This is the url your application will use to connect to Graph API.</p>
    <p><img src="<?=url('msgraph/web-platform.png');?>" class="img-fluid"> </p>
    <p>Now under Microsoft Graph Permissions click add and select which permissions to use, a maximum of 20 can be selected.</p>
    <p><img src="<?=url('msgraph/permissions.png');?>" class="img-fluid"> </p>
    <p>The other options are optional, click save at the bottom of the page to save your changes.</p>

</section>