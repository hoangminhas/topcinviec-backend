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
            $table->string('title');
            $table->string('content');
            $table->date('posting_start');
            $table->date('posting_end');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('business_category_id');
            $table->unsignedBigInteger('job_detail_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
            $table->foreign('business_category_id')->references('id')->on('business_categories');
            $table->foreign('job_detail_id')->references('id')->on('job_details');
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
