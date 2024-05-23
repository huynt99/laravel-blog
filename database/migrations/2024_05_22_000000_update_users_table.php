<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('first_name');
                $table->string('last_name');
                $table->string('phone')->unique();
                $table->string('birthday')->nullable();
                $table->enum('gender',['female','male'])->default('male');
                $table->string('avatar')->nullable();
                $table->string('city_id');
                $table->string('country_id');
            });
        }
    }

};
