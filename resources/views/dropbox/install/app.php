<h2>Application Register</h2>

<p>To use Dropbox API an application needs creating at <a href="https://www.dropbox.com/developers/apps">https://www.dropbox.com/developers/apps</a></p>
<p><img src="<?=url('dropbox/app.png');?>" class="img-responsive"> </p>
<p>Create a new application, select either Dropbox API or Dropbox Business API</br>
    Next select type of access needed either app folder (useful for isolating to a single folder), or full Dropbox.</p>

<p>Next copy and paste the APP Key and App Secret into your .env file:</p>

<pre><code class="language-php">
DROPBOX_CLIENT_ID=
DROPBOX_SECRET_ID=
</code></pre>

<p>Now enter you desired redirect url. This is the url your application will use to connect to Dropbox API.</p>
<p>A comman URL is https://domain.com/dropbox/oauth</p>
