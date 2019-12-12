<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskCatalogValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_catalog_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('task_catalog_id');
            $table->string('name');
            $table->string('value');
            $table->timestamps();

            $table->foreign('task_catalog_id')->references('id')->on('task_catalogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_catalog_values');
    }
}
