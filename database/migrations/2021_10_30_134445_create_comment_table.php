<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->date('date');
            $table->text('danhgia');
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
            
            $table->foreign('id_user')->references('id')->on('users');
        });
        // Schema::table('comment', function($table) {
        // //noi bảng
        //  $table->foreign('id')->reference('id_user')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
