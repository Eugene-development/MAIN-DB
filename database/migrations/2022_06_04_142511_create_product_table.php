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
        Schema::create('product', function (Blueprint $table) {
//            $table->id();
            $table->uuid('id')->primary();
            $table->string('key', 255);
            $table->timestamps();
            $table->string('value', 255)->nullable();

//            $table->string('productable_type', 255)->nullable();
//            $table->string('productable_uuid', 255)->nullable();

            $table->uuidMorphs('productable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
