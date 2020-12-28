@include('header')
<div class="container mt-4">
    <h2>Install Composer from this link  </h2>

<a href="https://getcomposer.org/" target="_new" class="btn btn-success">Composer</a>
<p>Composer is an application-level package manager for the PHP programming language that provides a standard format for managing dependencies of PHP software and required libraries. It was developed by Nils Adermann and Jordi Boggiano, who continue to manage the project. They began development in April 2011 and first released it on March 1, 2012. Composer is strongly inspired by Node.js's "npm" and Ruby's "bundler". The project's dependency solving algorithm started out as a PHP-based port of openSUSE's libzypp satsolver.</p>
<h2>Installation Code for Laravel 7 : Open cmd/terminal and use this code  </h2> 
<pre>
<code>
composer create-project --prefer-dist laravel/laravel:^7.0 blog  
</code>
</pre>
<p>'blog' is the name of the project.</p>
<h2>Laravel 7 requirement</h2>
<pre><code>
PHP >= 7.2.5
BCMath PHP Extension
Ctype PHP Extension
Fileinfo PHP extension
JSON PHP Extension
Mbstring PHP Extension
OpenSSL PHP Extension
PDO PHP Extension
Tokenizer PHP Extension
XML PHP Extension</code></pre>
</div>


@include('footer')