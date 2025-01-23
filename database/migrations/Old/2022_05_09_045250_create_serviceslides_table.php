<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceslidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceslides', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned()->index();
            $table->string('words');
            $table->string('name');
           
            $table->foreign('service_id')->references('id')->on('services')->onDelete('CASCADE')->onUpdate('CASCADE');
       
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
        Schema::dropIfExists('serviceslides');
    }
}
