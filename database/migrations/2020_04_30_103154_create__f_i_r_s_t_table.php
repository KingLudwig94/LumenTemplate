<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFIRSTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firsts', function (Blueprint $table) {
            $table->integer('number');
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('firsts', function ($table) {
            $table->primary('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_f_i_r_s_t');
    }
}
