<section class="docs-section" id="item-1-5">
    <h2 class="section-heading">Working with folders</h2>

<p>This package provides a clean way of working with folders.</p>
<p>To work with folders first call <b>->folders()</b> followed by a method.</p>

<br>
<br>

<h3>Get folder contents</h3>
<p>Accepts an folder id defaults to 0, returns an array.</p>
<pre><code class="language-php">
Box::folders()->get($id = 0);
</code></pre>

<br>

<h3>Get files within a folder</h3>
<p>Accepts an folder id, returns an array.</p>
<pre><code class="language-php">
Box::folders()->items($id);
</code></pre>

<br>

<h3>Create folder</h3>
<p>Accepts name of the folder and the folder id as parent, defaults to 0 when ommited. Returns an array.</p>
<pre><code class="language-php">
Box::folders()->store($name, $parent = 0);
</code></pre>

<br>

<h3>Rename folder</h3>
<p>Accepts the folder id, name of the folder. Optionally set the parent folder. Returns an array.</p>
<pre><code class="language-php">
Box::folders()->update($id, $name, $parent = 0);
</code></pre>

<br>

<h3>Copy folder</h3>
<p>Accepts the folder id, the parent folder. Optionally set a new name on copy. Returns an array.</p>
<pre><code class="language-php">
Box::folders()->copy($id, $parent, $name = null);
</code></pre>

<br>

<h3>Delete folder</h3>
<p>Accepts the folder id. Returns no output.</p>
<pre><code class="language-php">
Box::folders()->destroy($id);
</code></pre>

<h3>Get folder collaborations</h3>
<p>Accepts the folder id. Returns an array.</p>
<pre><code class="language-php">
Box::folders()->collaborations($id);
</code></pre>

</section>
