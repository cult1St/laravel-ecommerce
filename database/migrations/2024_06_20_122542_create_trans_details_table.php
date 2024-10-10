<?php

use App\Models\Product;
use App\Models\Transaction;
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
        Schema::create('trans_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Product::class);
            $table->string("amount");
            $table->foreignIdFor(Transaction::class);
            $table->string("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_details');
    }
};
