<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->text('images');
            $table->string('keywords')->nullable();
            $table->integer('amount');
            $table->enum('status', ['1','0'])->default('0');
            $table->foreignId('vendor_id')->constrained(table: 'vendors', indexName: 'fk_ad_vendor_id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
