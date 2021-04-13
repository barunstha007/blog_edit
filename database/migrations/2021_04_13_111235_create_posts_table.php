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
        Schema::enableForeignKeyConstraints();
        Schema::create('posts', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->string('file_path');
            $table->unsignedInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')         
                  ->on('categories')
                  ->onDelete('cascade');
                   
        
            
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
