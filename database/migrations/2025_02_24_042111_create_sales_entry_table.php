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
        Schema::create('sales_entry', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity_sold');
            $table->decimal('total_sales');
            $table->time('transaction_date');
            $table->string('costumer_name',60);
            $table->string('address',80);
            $table->string('number',20);
            $table->enum('status',['walk-in','delivery']);
            $table->timestamps();
            $table->foreign("product_id")->references("id")->on("product")->onUpdate("cascade")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_entry');
    }
};
