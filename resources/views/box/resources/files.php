<section class="docs-section" id="item-1-4">
    <h2 class="section-heading">Working with Files</h2>

<p>This package provides a clean way of working with files.</p>
<p>To work with files first call <b>->files()</b> followed by a method.</p>

<h3>Import Namespace</h3>
<pre><code class="language-php">
use Dcblogdev\Dropbox\Facades\Dropbox;
</code></pre>

<h3>List Content</h3>
<p>list files and folders of a given path</p>
<pre><code class="language-php">
Dropbox::files()->listContents($path = '')
</code></pre>

<h3>List Content Continue</h3>
<p>Using a cursor from the previous listContents call to paginate over the next set of folders/files.</p>
<pre><code class="language-php">
Dropbox::files()->listContentsContinue($cursor = '')
</code></pre>

<h3>Delete folder/file</h3>
<p>Pass the path to the file/folder, When delting a folder all child items will be deleted.</p>
<pre><code class="language-php">
Dropbox::files()->delete($path)
</code></pre>

<h3>Create Folder</h3>
<p>Pass the path to the folder to be created.</p>
<pre><code class="language-php">
Dropbox::files()->createFolder($path)
</code></pre>

<h3>Search Files</h3>
<p>Each word will used to search for files.</p>
<pre><code class="language-php">
Dropbox::files()->search($query)
</code></pre>

<h3>Upload File</h3>
<p>Upload files to Dropbox by passing the folder path followed by the filename. Note this method supports uploads up to 150MB only.</p>
<pre><code class="language-php">
Dropbox::files()->upload($path, $file)
</code></pre>

<h3>Download File</h3>
<p>Download file from Dropbox by passing the folder path including the file.</p>
<pre><code class="language-php">
Dropbox::files()->download($path)
</code></pre>

<br>
<br>

</section>
