<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidang', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('id_admin');
            $table->integer('briefInfo');
            $table->integer('tags');
            $table->string('name');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->date('date');
            $table->tinyInteger('status')->nullable()->default(1);

            $table->timestamps();
        });
        // Schema::table('baidang', function($table) {
        //  $table->foreign('id_product')->reference('id')->on('product');
        //  $table->foreign('id_admin')->reference('id')->on('admin');
        //  $table->foreign('id_noidung')->reference('id')->on('noidunglienquan');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baidang');
    }
}
