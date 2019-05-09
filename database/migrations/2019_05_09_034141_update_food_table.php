<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('food', function (Blueprint $table) {
            
        //     $table->integer('id_typefood');
        
        //     $table->foreign('id_typefood')
        //     ->references('id')
        //     ->on('type_food')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');
        // });
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
