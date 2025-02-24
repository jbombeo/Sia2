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
        Schema::create('stock_costumer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('first_name',20);
            $table->string('middle_name',20);
            $table->string('last_name',30);
            $table->string('contact_number',11);
            $table->string('loc_add',70);
            $table->timestamps();
            $table->foreign("product_id")->references("id")->on("product")->onUpdate("cascade")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_costumer');
    }
};
