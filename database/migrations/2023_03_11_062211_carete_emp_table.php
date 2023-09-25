<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CareteEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp', function (Blueprint $table) 
        {
            $table->id();
            $table->string('e_id')->unique();
            $table->string('ename');
            $table->string('email');
            $table->text('e_address');
            $table->enum('e_gender',['M','F','O'])->nullable();
            $table->date('dob');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp');
    }
}
