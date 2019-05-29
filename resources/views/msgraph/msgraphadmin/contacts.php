<h3>Contacts</h3>
<br>
<p>MsGraphAdmin provides a clean way of working with a users contacts.</p>
<p>To work with contacts first call <b>->contacts()</b> followed by a method.</p>
<p>Each call needs to use <b>->userid($userid)</b> to inform the object which user to work with.</p>

<pre><code class="language-php">
MsGraphAdmin::contacts()->userid($userId)
</code></pre>

<br>
<br>

<h4>List Contacts</h4>

<p>Return a list of all contacts </p>
<pre><code class="language-php">
MsGraphAdmin::contacts()->userid($userId)->get()
</code></pre>

<p>By default only 10 contacts are returned this can be changed by either using GET requests or pass an array of option to get()</p>
<br>
<p>Option 1: GET Request</p>
<p>Adding <b>top=50</b> to the url will return 50 contacts, to skip the starting point use <b>skip=2</b> to start from the 2nd set. These can be used together:</p>
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
MsGraphAdmin::contacts()->userid($userId)->get([
    "\$orderby" => "displayName",
    "\$top" => 100,
    "\$skip" => 0,
    "\$count" => "true",
]);
</code></pre>

<p>The response returned is an array in this format:</p>
<pre><code class="language-php">
array:4 [
  "contacts" => array:4 [
    "@odata.context" => "https://graph.microsoft.com/beta/$metadata#users('5b7f8791-03a1-4b68-9ff2-5bdca45563')/contacts"
    "@odata.count" => 1112
    "@odata.nextLink" => "https://graph.microsoft.com/beta/users/5b7f8791-03a1-4b68-9ff2-5bdca45563/contacts?$orderby=displayName&$top=50&$skip=52&$count=true"
    "value" => array:50 [
        0 => array:38 [
        "@odata.etag" => "W/"BYAAAALc1XGBA2GTZfCUzLE1FjyAAKvR6Gl""
        "id" => "hhOTJlODA2LTUwYTQtNGNmMS1hZWQ2LWVjZjU1OTZiYzY4OQBGAAAAAAAbbv6dt9gvS71-sGvg9qUVBwALc1XGBA2GTZfCUzLE1FjyAAAAui-HAAALc1XGBA2GTZfCUzLE1FjyAAEEO4cvAAA="
        "createdDateTime" => "2017-06-15T21:47:53Z"
        "lastModifiedDateTime" => "2019-04-04T21:26:50Z"
        "changeKey" => "EQAAABYAAAALc1XGBA2GTZfCUzLE1FjyAAKvR6Gl"
        "categories" => []
        "parentFolderId" => "TJlODA2LTUwYTQtNGNmMS1hZWQ2LWVjZjU1OTZiYzY4OQAuAAAAAAAbbv6dt9gvS71-sGvg9qUVAQALc1XGBA2GTZfCUzLE1FjyAAAAui-HAAA="
        "birthday" => null
        "fileAs" => ""
        "displayName" => "​John Smith"
        "givenName" => null
        "initials" => null
        "middleName" => null
        "nickName" => null
        "surname" => null
        "title" => null
        "yomiGivenName" => null
        "yomiSurname" => null
        "yomiCompanyName" => null
        "generation" => null
        "imAddresses" => []
        "jobTitle" => null
        "companyName" => null
        "department" => null
        "officeLocation" => null
        "profession" => null
        "assistantName" => null
        "manager" => null
        "spouseName" => null
        "personalNotes" => ""
        "children" => []
        "gender" => null
        "isFavorite" => null
        "emailAddresses" => array:1 [
             0 => array:3 [
                "type" => "unknown"
                "name" => "​John Smith"
                "address" => "j.smith@domain.co.uk"
              ]
            ]
        ]
        "websites" => []
        "phones" => []
        "postalAddresses" => []
        "flag" => array:1 [
          "flagStatus" => "notFlagged"
        ]
      ]
    ]
  ]
  "total" => 1112
  "top" => "50"
  "skip" => "52"
]
</code></pre>

<p>The <b>@odata.nextLink</b> is the link for the next set of data that can be used directly or make use of the <b>top</b> and <b>skip</b> that are returned.</p>

<br>
<br>

<h4>Create Contacts</h4>
<p>To create a contact call <b>->store($data)</b> and pass in an array of details for the contact.</p>
<p>To see all contact properties look at <a href="https://docs.microsoft.com/en-us/graph/api/resources/contact?view=graph-rest-1.0">https://docs.microsoft.com/en-us/graph/api/resources/contact?view=graph-rest-1.0</a></p>
<pre><code class="language-php">
$data = [
    'displayName' => 'John Smith',
    'givenName' => 'John Smith',
    'emailAddresses' => [
        [
            'address' => 'j.smith@domain.com',
            'name' => 'John Smith'
        ]
    ]
];
MsGraphAdmin::contacts()->userid($userId)->store($data)
</code></pre>

<br>
<br>

<h4>View Contact</h4>
<p>To view a contact call <b>->find($id)</b> followed by the id of the contact.</p>
<pre><code class="language-php">
MsGraphAdmin::contacts()->userid($userId)->find($id)
</code></pre>

<br>
<br>

<h4>Update Contact</h4>
<p>To update a contact call <b>->update($data)</b> and pass in the id of the contact and an array of details to be changed.</p>
<p>To see all contact properties look at <a href="https://docs.microsoft.com/en-us/graph/api/resources/contact?view=graph-rest-1.0">https://docs.microsoft.com/en-us/graph/api/resources/contact?view=graph-rest-1.0</a></p>
<p>In this example only the email address will be changed</p>
<pre><code class="language-php">
$data = [
    'emailAddresses' => [
        [
            'address' => 'j.agent@domain.com',
            'name' => 'John Agent'
        ]
    ]
];
MsGraphAdmin::contacts()->userid($userId)->update($id, $data)
</code></pre>

<br>
<br>

<h4>Delete Contact</h4>
<p>To delete a contact call <b>->delete($id)</b> followed by the id of the contact.</p>
<pre><code class="language-php">
MsGraphAdmin::contacts()->userid($userId)->delete($id)
</code></pre>
