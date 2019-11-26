<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation 
<div class="magic-block-textarea">
<p>Voyager is super easy to install. After creating your new Laravel application you can include the Voyager package with the following command: </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ composer</span> require tcg/voyager</span>
</code></pre>
<p>Next make sure to create a new database and add your database credentials to your .env file:</p>
<pre><code>DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
</code></pre><p>You will also want to update your website URL inside of the <code>APP_URL</code> variable inside the .env file:</p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">APP_URL</span><span class="cm-operator">=</span>localhost:8000</span>
</code></pre>
<p>Next, add the Voyager service provider to the <code>config/app.php</code> file in the <code>providers</code> array:</p>
<pre><code class="lang-php"><span class="cm-s-neo"><span class="cm-string">'providers'</span> <span class="cm-operator">=&gt;</span> [
    <span class="cm-comment">// Laravel Framework Service Providers...</span>
    <span class="cm-comment">//...</span>

    <span class="cm-comment">// Package Service Providers</span>
    <span class="cm-variable">TCG\Voyager\VoyagerServiceProvider</span>::<span class="cm-keyword">class</span>,
    <span class="cm-comment">// ...</span>

    <span class="cm-comment">// Application Service Providers</span>
    <span class="cm-comment">// ...</span>
],</span>
</code></pre>
<p>Finally, we can install Voyager. You can choose to install Voyager with dummy data or without the dummy data. The dummy data will include 1 admin account (if no users already exist), 1 demo page, 4 demo posts, 2 categories and 7 settings.</p>
<p>To install Voyager without dummy data simply run</p>
<pre><code class="lang-bash"><span class="cm-s-neo">php artisan voyager:install</span>
</code></pre>
<p>If you prefer installing it with the dummy data run</p>
<pre><code class="lang-bash"><span class="cm-s-neo">php artisan voyager:install <span class="cm-attribute">--with-dummy</span></span>
</code></pre>

</div>
git the clone:<br> 
git clone https://github.com/ahmedtawfek28/task.git Task
after that go to the file 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
