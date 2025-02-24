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
        Schema::create('user_form', function (Blueprint $table) {
            $table->id();
            $table->string('username',40);
            $table->string('name',50);
            $table->string('password',30);
            $table->enum('user_type',['admin','teller']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_form');
    }
};
