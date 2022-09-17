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
        Schema::create('seodescription', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('key');
            $table->boolean('is_active')->default(true);
            $table->string('value');
            $table->nullableMorphs('parentable');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seodescription');
    }
};
