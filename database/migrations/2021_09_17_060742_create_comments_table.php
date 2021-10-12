<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('comments');

        if(Schema::hasTable('comments')) return;

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('article_id');
            $table->timestamp('created_at');

            $table->foreign('article_id')
            ->references('id')
            ->on('articles')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('author_id')
            ->references('id')
            ->on('authors')
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
        Schema::drop('comments');
    }
}
