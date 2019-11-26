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

<p>and at last to migrate the database with seeds : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ php </span> artisan migrate --seed</span>
</code></pre>
</div>
<p>run the server : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">$ php </span> artisan serve</span>
</code></pre>
</div>

## Usage 

<p>This task about makeing  Json of a company with departments, each department should have employee and manager, and their profiles (should include only the word profile)  </p>

<p>For Registration (post): </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">http://127.0.0.1:8000/api/register</span>
</code></pre>
<p>Parametars </p>
<p>department_id that will work as foreign key of table department</p>
<p>manager_id that will work as foreign key of table user 0 as a manager and else will be as employee related with manager_id </p>
<p>Example : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">
name: Test Man
email: test2@email.com
department_id:1
manager_id:1
password: secret
password_confirmation: secret
</span>
</code></pre>
<p>For Login (post): </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">http://127.0.0.1:8000/api/login</span>
</code></pre>
<p>Example : </p>
<pre><code class="lang-bash"><span class="cm-s-neo"><span class="cm-def">
email: test2@email.com
password: secret
</span>
</code></pre>
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
