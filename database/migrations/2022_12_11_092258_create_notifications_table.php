<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{

    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar');
            $table->string('title_en');
            $table->foreignId('order_id')->nullable()->references('id')->on('orders')->cascadeOnDelete();
            $table->integer('read')->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
