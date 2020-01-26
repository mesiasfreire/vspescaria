<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_title')->nullable();
            $table->text('post_slug')->nullable();
            $table->longText('post_content')->nullable();
            $table->string('post_cover')->nullable();
            $table->enum('post_status',array_keys(Posts::POST_COVER));
            $table->dateTime('post_published')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('posts');
    }
}
