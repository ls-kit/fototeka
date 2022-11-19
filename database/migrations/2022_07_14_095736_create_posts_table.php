<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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


            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->integer('author_id');
            $table->text('description');
            $table->string('image');
            $table->string('original_date');
            $table->string('digital_date');
            $table->string('physic_description');
            $table->integer('width');
            $table->integer('height');
            $table->string('material');
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
