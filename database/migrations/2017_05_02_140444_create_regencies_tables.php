<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegenciesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regencies', function(Blueprint $table){
            // $table->id('No');
            // $table->foreignId('user_id')->contrained('perdagangan1s' ,'id');
            $table->char('id', 4)->index();
            $table->char('province_id', 2);
            $table->string('name', 50);
            // $table->string('ibukota');
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('regencies');
    }
}
