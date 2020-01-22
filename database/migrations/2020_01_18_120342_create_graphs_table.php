<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->string('percent')->nullable();
            $table->string('numb')->nullable();
            $table->string('aaa')->nullable();
            $table->string('bbb')->nullable();
            $table->string('ccc')->nullable();
            $table->string('ddd')->nullable();
            $table->string('eee')->nullable();
            $table->string('fff')->nullable();
            $table->string('ggg')->nullable();
            $table->string('hhh')->nullable();
            $table->string('iii')->nullable();
            $table->string('jjj')->nullable();
            $table->string('kkk')->nullable();
            $table->string('lll')->nullable();
            $table->bigInteger('aaa1')->unsigned()->nullable();
            $table->bigInteger('bbb1')->unsigned()->nullable();
            $table->bigInteger('ccc1')->unsigned()->nullable();
            $table->bigInteger('ddd1')->unsigned()->nullable();
            $table->bigInteger('eee1')->unsigned()->nullable();
            $table->bigInteger('fff1')->unsigned()->nullable();
            $table->bigInteger('ggg1')->unsigned()->nullable();
            $table->bigInteger('hhh1')->unsigned()->nullable();
            $table->bigInteger('iii1')->unsigned()->nullable();
            $table->bigInteger('jjj1')->unsigned()->nullable();
            $table->bigInteger('kkk1')->unsigned()->nullable();
            $table->bigInteger('lll1')->unsigned()->nullable();
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
        Schema::dropIfExists('graphs');
    }
}
