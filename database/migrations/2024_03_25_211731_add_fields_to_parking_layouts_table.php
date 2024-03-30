<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToParkingLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking_layouts', function (Blueprint $table) {
            $table->integer('row');
            $table->integer('column');
            $table->boolean('is_available')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking_layouts', function (Blueprint $table) {
            $table->dropColumn('row');
            $table->dropColumn('column');
            $table->dropColumn('is_available');
        });
    }
}
