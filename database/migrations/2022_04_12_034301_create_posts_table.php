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
            $table->double('salary');
            $table->string('job_type');
            $table->string('job_level');
            $table->integer('quantity');
            $table->string('gender');
            $table->unsignedBigInteger('province_id');
            $table->string('experience');
            $table->date('posting_start');
            $table->date('posting_end');
            $table->unsignedBigInteger('business_category_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('business_category_id')->references('id')->on('business_categories');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('status');
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
