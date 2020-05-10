<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewsBeons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_beons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_users');
            $table->integer('fk_beons');
            $table->text('content');
            $table->tinyInteger('status'); // 0 = not published. 1 = published. 2 = rejected from being publihed.
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews_beons');
    }
}
