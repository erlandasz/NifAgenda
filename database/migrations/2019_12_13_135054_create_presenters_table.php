<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presenters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('profile');
            $table->string('logo');
            $table->text('management');
            $table->string('pipeline');
            $table->text('address');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('type');
            $table->string('ticker');
            $table->text('sector');
            $table->string('founded');
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
        Schema::dropIfExists('presenters');
    }
}
