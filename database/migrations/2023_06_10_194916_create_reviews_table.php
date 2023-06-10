<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('rating');
            $table->integer('ad_id');
            $table->text('comment');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('author_id')->constrained(table: 'users', indexName: 'fk_review_author_id')->cascadeOnDelete();
            $table->foreignId('ad_id')->constrained(table: 'ads', indexName: 'fk_review_ad_id')->cascadeOnDelete();
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
        Schema::dropIfExists('reviews');
    }
}
