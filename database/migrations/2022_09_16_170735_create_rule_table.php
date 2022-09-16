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
        // TODO: $table->id(); ????
        Schema::create('rule', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('key');
            $table->string('value', 255);
            $table->string('slug', 255);
            $table->string('parentable_type', 255);
            $table->string('parentable_id', 255);
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
        Schema::dropIfExists('rule');
    }
};
