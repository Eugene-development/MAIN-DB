<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seotitle', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('key');
            $table->string('value')->nullable();
            $table->string('parentable_type', 255)->nullable();
            $table->string('parentable_id', 255)->nullable();
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
        Schema::dropIfExists('seotitle');
    }
};
