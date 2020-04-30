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
        Schema::create('seconds', function (Blueprint $table) {
            $table->integer('id');
            $table->string('extName');
            $table->boolean('exists');
            $table->timestamps();
        });

        Schema::table('seconds', function ($table) {
            $table->primary('id');
            $table->foreign('extName')->references('name')->on('firsts')->onDelete('cascade');
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
