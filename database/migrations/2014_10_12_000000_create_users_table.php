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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('key')->default('base');
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->nullableMorphs('parentable');
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
