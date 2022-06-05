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
        Schema::create('property', function (Blueprint $table) {
            $table->id('inc');
            $table->string('id');
            $table->string('key', 255);
            $table->timestamps();
            $table->string('value', 255)->nullable();

//            $table->string('propertyable_type', 255)->nullable();
//            $table->string('propertyable_uuid', 255)->nullable();

            $table->uuidMorphs('propertyable', 'uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
};
