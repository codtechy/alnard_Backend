<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {

            $table->id();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->string('image');
            $table->string('name');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('packagecategories')->onDelete('CASCADE')->onUpdate('CASCADE');
       
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
