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
        Schema::create('druggrs', function (Blueprint $table) {
            $table->string('NhomthuocID', 10);
            $table->string('Tennhom',30);
            $table->primary('NhomthuocID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('druggrs');
    }
};
