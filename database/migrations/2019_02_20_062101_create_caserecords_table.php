<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaserecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caserecords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('case_title');
            $table->string('case_description');
            $table->string('client_name');
            $table->integer('client_phone');
            $table->string('opponent_name');
            $table->string('court_name');
            $table->string('status');
            $table->integer('value');
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
        Schema::dropIfExists('caserecords');
    }
}
