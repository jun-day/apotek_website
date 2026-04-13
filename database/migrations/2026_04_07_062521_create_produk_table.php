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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignid()->constrained('kategori');
            $table->string('sku');
            $table->string('name');
            $table->string('generic_name');
            $table->string('brand');
            $table->text('description');
            $table->text('composition');
            $table->text('indications');
            $table->text('contraindications');
            $table->text('side_effects');
            $table->text('dosage_instruction');
            $table->string('storage_instruction');
            $table->string('bpom_number');
            $table->enum('drug_class');
            $table->boolean('requires_prescription');
            $table->enum('dosage_form');
            $table->string('strength');
            $table->string('unit');
            $table->string('unit_contains');
            $table->decimal('price', 12, 2);
            $table->decimal('compare_price', 12, 2);
            $table->decimal('cost_price', 12, 2);
            $table->decimal('het_price', 12, 2);
            $table->integer('stock');
            $table->integer('min_stock_alert');
            $table->integer('max_purchase_qty');
            $table->integer('weight_gram');
            $table->date('expired_date');
            $table->boolean('is_active');
            $table->boolean('is_featured');
            $table->interger('sold_count');
            $table->decimal('rating_avg', 3, 2);
            $table->interger('rating_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
