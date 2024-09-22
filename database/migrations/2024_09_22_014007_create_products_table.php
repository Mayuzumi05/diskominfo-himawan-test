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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->integer("price")->nullable(false);
            $table->integer("stock")->nullable(false);
            $table->integer("sold")->nullable(false);
            $table->timestamps();

            // $table->foreignId('order_id')->constrained()->onDelete('cascade');
            // $table->foreign("order_id")->on("orders")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};