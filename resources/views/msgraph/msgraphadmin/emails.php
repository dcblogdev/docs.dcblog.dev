<h3>Emails</h3>
<br>
<p>MsGraphAdmin provides a clean way of working with a users emails.</p>
<p>To work with emails first call <b>->emails()</b> followed by a method.</p>
<p>Each call needs to use <b>->userid($userid)</b> to inform the object which user to work with.</p>

<pre><code class="language-php">
MsGraphAdmin::emails()->userid($userId)
</code></pre>

<br>
<br>

<h4>List emails</h4>

<p>Return a list of emails </p>
<pre><code class="language-php">
MsGraphAdmin::emails()->userid($userId)->get()
</code></pre>

<p>By default only 10 emails are returned this can be changed by either using GET requests or pass an array of option to get()</p>
<br>
<p>Option 1: GET Request</p>
<p>Adding <b>top=50</b> to the url will return 50 emails, to skip the starting point use <b>skip=2</b> to start from the 2nd set. These can be used together:</p>
<pre><code class="language-php">
?top=50&skip=2
</code></pre>
<br>

<p>Option 2: Array</p>
<p>The default array that is used internally is below, you can override these options by passing an array to the <b>->get()</b> method.
<pre><code class="language-php">
[
    "\$orderby" => "displayName",
    "\$top" => $top,
    "\$skip" => $skip,
    "\$count" => "true",
]
</code></pre>

<p>This would look like this:</p>
<pre><code class="language-php">
MsGraphAdmin::emails()->userid($userId)->get([
    "\$orderby" => "displayName",
    "\$top" => 15,
    "\$skip" => 0,
    "\$count" => "true",
]);
</code></pre>

<p>The response returned is an array in this format:</p>
<pre><code class="language-php">
array:4 [
  "emails" => array:4 [
    "@odata.context" => "https://graph.microsoft.com/beta/$metadata#users('5b7f8791-03a1-4b68-9ff2-5bdca45563')/messages"
    "@odata.count" => 44177
    "@odata.nextLink" => "https://graph.microsoft.com/beta/users/5b7f8791-03a1-4b68-9ff2-5bdca45563/messages?$count=true&$orderby=sentDateTime+desc&$skip=15"
    "value" => [
        "@odata.etag" => "W/"CQAAABYAAAC8b+tAO4nLRZCbkhud5CXFAASVGY/p""
        "id" => "AAMkADdlZTBjNjQ4LWI0OGItNDFhZS05ZDNiLThiY2JkYzIzZWZkYwBGAAAAAABFX7lJCx7ZRLTJ6iI0yZK6BwC8b_tAO4nLRZCbkhud5CXFAAAAAAELAAC8b_tAO4nLRZCbkhud5CXFAASUuapzAAA="
        "createdDateTime" => "2019-05-29T08:58:09Z"
        "lastModifiedDateTime" => "2019-05-29T09:02:00Z"
        "changeKey" => "CQAAABYAAAC8b+tAO4nLRZCbkhud5CXFAASVGY/p"
        "categories" => []
        "receivedDateTime" => "2019-05-29T08:58:09Z"
        "sentDateTime" => "2019-05-29T08:58:04Z"
        "hasAttachments" => false
        "internetMessageId" => "<w5lmHoCvQX67I7OkUNxB6w@ismtpd0006p1lon1.sendgrid.net>"
        "subject" => "sent you a document to sign"
        "bodyPreview" => You Have Been Sent A Document To Sign
        "importance" => "normal"
        "parentFolderId" => "AQMkADdlZQAwYzY0OC1iNDhiLTQxYWUtOWQzYi04YmNiZGMyM2VmZGMALgAAA0VfuUkLHtlEtMnqIjTJkroBALxv60A7ictFkJuSG53kJcUAAAIBCwAAAA=="
        "conversationId" => "AAQkADdlZTBjNjQ4LWI0OGItNDFhZS05ZDNiLThiY2JkYzIzZWZkYwAQADNDbfE-oxVGsAHIKhk2vCE="
        "conversationIndex" => "AQHVFfyjM0Nt8T+jFUawAcgqGTa8IQ=="
        "isDeliveryReceiptRequested" => null
        "isReadReceiptRequested" => false
        "isRead" => true
        "isDraft" => false
        "webLink" => "https://outlook.office365.com/owa/?ItemID=jQ4LWI0OGItNDFhZS05ZDNiLThiY2JkYzIzZWZkYwBGAAAAAABFX7lJCx7ZRLTJ6iI0yZK6BwC8b%2BtAO4nLRZCbkhud5CXFAAAAAAEL ▶"
        "inferenceClassification" => "other"
        "unsubscribeData" => []
        "unsubscribeEnabled" => false
        "mentionsPreview" => null
        "body" => array:2 [▶]
        "sender" => array:1 [▼
          "emailAddress" => array:2 [▼
            "name" => "via Signable"
            "address" => "document@signable.co.uk"
          ]
        ]
        "from" => array:1 [▼
          "emailAddress" => array:2 [▼
            "name" => "via Signable"
            "address" => "document@signable.co.uk"
          ]
        ]
        "toRecipients" => array:1 [▼
          0 => array:1 [▼
            "emailAddress" => array:2 [▶]
          ]
        ]
        "ccRecipients" => []
        "bccRecipients" => []
        "replyTo" => array:1 [▼
          0 => array:1 [▼
            "emailAddress" => array:2 [▼
              "name" => "John Smith"
              "address" => "j.smith@domain.co.uk"
            ]
          ]
        ]
        "flag" => array:1 [▼
          "flagStatus" => "notFlagged"
        ]
    ]
  "total" => 44177
  "top" => "0"
  "skip" => "15"
]
</code></pre>

<p>The <b>@odata.nextLink</b> is the link for the next set of data that can be used directly or make use of the <b>top</b> and <b>skip</b> that are returned.</p>

<br>
<br>

<h4>Send Email</h4>
<p>To send an email the format is different to normal calls. The format is to call multiple methods to set the email properties.</p>
<p>Required methods are: <b>to(array)</b> <b>subject(string)</b> <b>body(string/markup)</b> <b>send()</b></p>

<p>Note these methods expect an array to be passed:</p>
<ul>
    <li>to(['email@domains.com'])</li>
    <li>cc(['email@domains.com'])</li>
    <li>bcc(['email@domains.com'])</li>
    <li>attachments(['path/to/file'])</li>
</ul>

<pre><code class="language-php">
MsGraphAdmin::emails()
->userid($userId)
->to(['email@domains.com'])
->subject('the subject')
->body('<p>the content</p>')
->send()
</code></pre>

<p><b>cc()</b> and <b>bcc</b> and <b>attachments</b> are optional.</p>
<p>To send attachments pass an array of files paths</p>

<pre><code class="language-php">
MsGraphAdmin::emails()
->userid($userId)
->to(['email@domains.com'])
->subject('the subject')
->body('<p>the content</p>')
->attachments([public_path('images/logo')])
->send()
</code></pre>

<br>
<br>

<h4>Read Email</h4>
<p>To view an email call <b>->find($id)</b> followed by the id of the email.</p>
<pre><code class="language-php">
MsGraphAdmin::emails()->userid($userId)->find($id)
</code></pre>

<br>
<br>

<h4>Reply Email</h4>
<p>To reply to an email call <b>->reply()</b> and use <b>->comment()</b> instead of <b>->body()</b>.</p>
<pre><code class="language-php">
MsGraphAdmin::emails()
->userid($userId)
->id($id)
->to(['email@domains.com'])
->subject('the subject')
->comment('<p>the reply content</p>')
->reply()
</code></pre>

<br>
<br>

<h4>Forward Email</h4>
<p>To forward to an email call <b>->forward()</b> and use <b>->comment()</b> instead of <b>->body()</b>.</p>
<pre><code class="language-php">
MsGraphAdmin::emails()
->userid($userId)
->id($id)
->to(['email@domains.com'])
->subject('the subject')
->comment('<p>the reply content</p>')
->forward()
</code></pre>

<h4>Delete Email</h4>
<p>To delete a email call <b>->delete($id)</b> followed by the id of the email.</p>
<pre><code class="language-php">
MsGraphAdmin::emails()->userid($userId)->delete($id)
</code></pre>
