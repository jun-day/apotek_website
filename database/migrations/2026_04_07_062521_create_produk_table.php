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
            //Relasi & identitas
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('sku');
            //Informasi nama & merek
            $table->string('name');
            $table->string('generic_name');
            $table->string('brand');
            $table->text('description');
            //Informasi farmasi
            $table->text('composition');
            $table->text('indications');
            $table->text('contraindications');
            $table->text('side_effects');
            $table->text('dosage_instruction');
            $table->string('storage_instruction');
            $table->string('bpom_number');
            // Klasifikasi obat
            $table->enum('regulation_class', ['obat_bebas','obat_bebas_terbatas','obat_keras','obat_psikotropika_narkotika', 'herbal']);
            $table->json('pharmacological_class')->nullable();
            $table->boolean('requires_prescription')->default(false);
            $table->enum('dosage_form', ['tablet', 'kapsul', 'serbuk', 'sirup', 'injeksi', 'tetes', 'krim', 'salep', 'gel']);
            $table->string('strength');
            $table->string('unit');
            $table->string('unit_contains');
            //Harga
            $table->decimal('price', 12, 2);
            $table->decimal('compare_price', 12, 2);
            $table->decimal('cost_price', 12, 2);
            $table->decimal('het_price', 12, 2);
            //Stok & logistik
            $table->integer('stock')->default(0);
            $table->integer('min_stock_alert');
            $table->integer('max_purchase_qty');
            $table->integer('weight_gram');
            $table->date('expired_date');
            // Statistik & visibilitas
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('sold_count')->default(0);
            $table->decimal('rating_avg', 3, 2)->default(0);
            $table->integer('rating_count')->default(0);
            $table->timestamps();
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
