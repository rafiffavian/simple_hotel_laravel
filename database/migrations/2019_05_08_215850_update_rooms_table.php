<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            
            $table->foreign('id_kategori_room')
            ->references('id')
            ->on('kategori_room')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_kategor')
            ->references('id')
            ->on('kategori')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_bed_type')
            ->references('id')
            ->on('bed_type')
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
