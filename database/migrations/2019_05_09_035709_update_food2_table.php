<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFood2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('food', function (Blueprint $table) {
            
        });
        Schema::create('food', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_typefood')->unsigned();
            $table->string('file');
            $table->string('name');
            $table->text('description');
            $table->string('harga');
            $table->timestamps();
        
            $table->foreign('id_typefood')
            ->references('id')
            ->on('type_food')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
