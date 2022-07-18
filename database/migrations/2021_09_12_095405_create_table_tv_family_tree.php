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
            $table->integer('mid');
            $table->text('mid_name');
            $table->integer('fid');
            $table->text('fid_name');
            $table->integer('pids');
            $table->text('pids_name');
            $table->integer('orderId');
            $table->text('relationship')->nullable();
            $table->text('name')->nullable();
            $table->integer('gender')->nullable();
            $table->text('tags')->nullable();
            $table->string('img')->nullable();
            $table->tinyInteger('status');
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
