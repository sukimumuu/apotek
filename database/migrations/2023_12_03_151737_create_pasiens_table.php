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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->enum('gender', ['male','female','undefined'])->default('undefined');
            $table->integer('age');
            $table->integer('phone')->nullable();
            $table->enum('order_type', ['consult','only_buy']);
            $table->enum('recepts', ['yes','no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
