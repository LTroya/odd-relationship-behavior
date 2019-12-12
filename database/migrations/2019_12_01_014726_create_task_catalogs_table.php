<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('task_catalog_type_id');
            $table->string('description');
            $table->string('title');
            $table->timestamps();

            $table->foreign('task_catalog_type_id')->references('id')->on('task_catalog_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_catalogs');
    }
}
