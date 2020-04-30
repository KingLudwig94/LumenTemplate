<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSECONDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_s_e_c_o_n_d', function (Blueprint $table) {
            $table->integer('id');
            $table->string('extName');
            $table->boolean('exists');
            $table->timestamps();
        });

        Schema::table('_s_e_c_o_n_d', function ($table) {
            $table->primary('id');
            $table->foreign('extName')->references('name')->on('_f_i_r_s_t')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_s_e_c_o_n_d');
    }
}
