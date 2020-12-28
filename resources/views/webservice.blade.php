@include('header')
<div class="container mt-4">
 <h3>RESTful APIs</h3>   
  <p>First, we need to understand what exactly is considered a RESTful API. REST stands for REpresentational State Transfer and is an architectural style for network communication between applications, which relies on a stateless protocol (usually HTTP) for interaction.</p>  
<h3>HTTP  Actions</h3>
<p>
<ul><li>GET: retrieve resources</li><li>POST: create resources</li><li>PUT: update resources</li><li>DELETE: delete resources</li></ul>
 <img class="img-fluid" src="{{asset('/')}}includes/images/rest.png" alt="" style="width: 450px">


</p>
<h2>Migrations and Models</h2>
<p>Before actually writing your first migration, make sure you have a database created for this app and add its credentials to the <pre>.env</pre> file located in the root of the project.
</p>

<p>
<pre><code>
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravelcourse
    DB_USERNAME=root
    DB_PASSWORD=</code></pre>

*** Please run <pre><code>php artisan config:cache</code></pre> everytime after changing .env file
</p>
<p>Let’s get started with our first model and migration—the Article. The article should have a title and a body field, as well as a creation date. Laravel provides several commands through Artisan—Laravel’s command line tool—that help us by generating files and putting them in the correct folders. 
To create the Article model, we can run:</p>
<pre><code>php artisan make:model Article -m</code></pre>

<p>The -m option is short for --migration and it tells Artisan to create one for our model. Here’s the generated migration (in database/migrations folder):
<br/><a href="https://laravel.com/docs/7.x/migrations">Full Documentation</a>
<pre><code>

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}



</code></pre>



</p>

<p style="color:red">I have changed some column in this file. Again no need to create table through migration as we discussed earlier..</p>


</div>
@include('footer')