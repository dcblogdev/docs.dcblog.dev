<section class="docs-section" id="item-1-4">
    <h2 class="section-heading">Working with Files</h2>

<p>This package provides a clean way of working with files.</p>
<p>To work with files first call <b>->files()</b> followed by a method.</p>

<br>
<br>

<h3>Get file</h3>
<p>Accepts a file id, returns an array.</p>
<pre><code class="language-php">
Box::files()->file($id);
</code></pre>

<br>
<br>

<h3>Download file</h3>
<p>Accepts a file id Optionally a path can be used when $storeDownload is set to true. To download the file only an id is required.</p>
<pre><code class="language-php">
Box::files()->download($id, $path = '', $storeDownload = false);
</code></pre>

<br>
<br>

<h3>Upload file</h3>
<p>Accepts a file path and filename. Optionally specificy the parent, defaults to 0 when ommited.</p>
<pre><code class="language-php">
Box::files()->upload($path, $name, $parent = 0);
</code></pre>

<br>
<br>

<h3>Upload revision</h3>
<p>Accepts the file id, file path and filename. Optionally specificy a new name.</p>
<pre><code class="language-php">
Box::files()->uploadRevision($file_id, $filepath, $name, $newname = null);
</code></pre>

<br>
<br>

<h3>Delete file</h3>
<p>Accepts a file id, returns no output.</p>
<pre><code class="language-php">
Box::files()->destroy($id);
</code></pre>

</section>
