<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('groupTitle')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_death')->nullable();
            $table->string('logo')->nullable();
            $table->text('	biography')->nullable();
            $table->text('	facebook')->nullable();
            $table->text('	twitter')->nullable();
            $table->text('	instagram')->nullable();
            $table->text('	wikipedia')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('dad')->nullable();
            $table->integer('mum')->nullable();
            $table->integer('husband')->nullable();
            $table->integer('wife')->nullable();
            $table->integer('temp_child')->nullable();
            $table->integer('lefts')->nullable();
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
        Schema::dropIfExists('people');
    }
}
