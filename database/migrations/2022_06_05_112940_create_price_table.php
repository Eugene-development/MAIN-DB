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
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->primary();
            $table->string('key', 255);
            $table->timestamps();
            $table->string('value', 255)->nullable();

//            $table->string('priceable_type', 255)->nullable();
//            $table->string('priceable_uuid', 255)->nullable();


            $table->uuidMorphs('priceable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
};
