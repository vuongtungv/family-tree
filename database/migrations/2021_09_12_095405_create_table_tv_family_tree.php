<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTvFamilyTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_family_tree', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mid')->nullable();
            $table->text('mid_name')->nullable();
            $table->integer('fid')->nullable();
            $table->text('fid_name')->nullable();
            $table->integer('pids')->nullable();
            $table->text('pids_name')->nullable();
            $table->integer('orderId')->nullable();;
            $table->text('relationship')->nullable();
            $table->text('name');
            $table->integer('gender')->nullable();
            $table->text('tags')->nullable();
            $table->string('img')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('bdate')->nullable();
            $table->string('ddate')->nullable();
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
        Schema::dropIfExists('tv_family_tree');
    }
}
