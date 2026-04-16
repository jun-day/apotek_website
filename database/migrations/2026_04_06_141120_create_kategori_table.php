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
        Schema::create('kategori', function (Blueprint $table) {
            //Identitas
            $table->id();
            $table->string('name');
            $table->string('slug');
            //Konten & tampilan
            $table->text('description');
            $table->string('icon_url');
            $table->string('color_hex');
            $table->string('image_url');
            //Aturan farmasi
            $table->boolean('requires_prescription');
            $table->integer('min_age');
            $table->enum('drug_class_default', ['obat_bebas','obat_bebas_terbatas','obat_keras','obat_psikotropika_narkotika','herbal'])->nullable();
            //Pengaturan
            $table->integer('sort_order');
            $table->boolean('is_active');
            $table->boolean('show_in_homepage');
            $table->boolean('show_in_nav');
            //Statistik
            $table->integer('product_count');
            //Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
