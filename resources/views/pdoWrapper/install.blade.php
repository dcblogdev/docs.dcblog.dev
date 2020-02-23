<section class="docs-section" id="item-1-3">
    <h2 class="section-heading">Install</h2>

    <p>Using composer include the repository by typing the following into a terminal</p>

<pre><code class="language-php">
composer require daveismyname/pdo-wrapper
</code></pre>

<p>Set the db credentials. Finally create an instance of the classes by calling it's get method.</p>

<p>This wrapper makes use of a single database connection further connections attempts will reuse the already open connections, if not already connected.</p>

<pre><code class="language-php">
use Daveismyname\PdoWrapper\Database;

// make a connection to mysql here
$db = Database::get($username, $password, $database, $host = 'localhost', $type = 'mysql');
</code></pre>

</section>