<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('parking_layouts', function (Blueprint $table) {
            $table->dropColumn(['row', 'column', 'is_available']);
            $table->text('layout_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parking_layouts', function (Blueprint $table) {
            $table->dropColumn('layout_data');
            $table->integer('row');
            $table->integer('column');
            $table->boolean('is_available')->default(true);
        });
    }
};