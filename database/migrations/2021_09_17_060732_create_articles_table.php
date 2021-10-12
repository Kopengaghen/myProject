<?php

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
        Schema::dropIfExists('articles');

        if(Schema::hasTable('articles')) return;
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('body'); 
            $table->text('description');
            $table->datetime('published_at')->nullable();     
            $table->string('image', 255)->nullable();    
            $table->unsignedBigInteger('author_id');    
            $table->unsignedBigInteger('category_id');
            $table->timestamp('created_at');   

            $table->foreign('author_id')
            ->references('id')
            ->on('authors')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
