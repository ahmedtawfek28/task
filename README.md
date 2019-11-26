<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation 
<div class="magic-block-textarea">
<p>git the clone: </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ git</span>  clone https://github.com/ahmedtawfek28/task.git Task</span>
</code></pre>
<p>Next we will get in on the file to manage : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ cd</span> Task</span>
</code></pre>
<p>Next we will install Composer: </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ composer</span> install</span>
</code></pre>
<p>Next we will Copy the .env.example to file of .env : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ cp</span> .env.example .env</span>
</code></pre>
<p>Next we will generate the key : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ php</span> artisan key:generate</span>
</code></pre>

<p>Next make sure to create a new database and add your database credentials to your .env file:</p>
<pre><code>DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
</code></pre>
<p>Next, change the database from utf8mp4 to utf8 <code>config/database.php</code> :</p>
<p>From <code>:</p>

<pre><code class="lang-php"><span class="cm-s-neo"><span class="cm-string">'<?php'</span> 
<span class="cm-string">'use Illuminate\Support\Str;'</span>
<span class="cm-string">'return ['</span>

    <span class="cm-comment">//...</span>

    <span class="cm-variable">'charset' => 'utf8mp4',</span>,
    <span class="cm-variable">'collation' => 'utf8mp4_unicode_ci',</span>,
    <span class="cm-comment">// ...</span>

],</span>
</code></pre>
<p>To <code>:</p>

<pre><code class="lang-php"><span class="cm-s-neo"><span class="cm-string">'<?php'</span> 
<span class="cm-string">'use Illuminate\Support\Str;'</span>
<span class="cm-string">'return ['</span>

    <span class="cm-comment">//...</span>

    <span class="cm-variable">'charset' => 'utf8',</span>,
    <span class="cm-variable">'collation' => 'utf8_unicode_ci',</span>,
    <span class="cm-comment">// ...</span>

],</span>
</code></pre>
<p>and last to migrate the data base with seeds : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ php </span> artisan migrate --seed</span>
</code></pre>
</div>
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
