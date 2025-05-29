<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //schema create tableName tas function 
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Title of a post.');
            $table->text('content')->comment('Content of a post');
            $table->string('slug')->comment('URL identifier of a post');
            $table->timestamp('publication_date')->nullable();
            $table->timestamp('last_modified date')->nullable();
            $table->string('status')->comment('D - draft, P - published, I - innactive');
            $table->text('featured-image-url')->comment('URL of featured image');
            $table->integer('view_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

     //for rolling back migrations
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
