<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_message')->default('Selamat datang di halaman biodata saya!');
            $table->string('name', 100)->default('Nama Anda');
            $table->string('nickname', 50)->nullable();
            $table->string('birth_place', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('address', 500)->nullable();
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('education', 150)->nullable();
            $table->string('hobby', 150)->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
        });

        DB::table('biodata')->insert([
            'welcome_message' => 'Selamat datang di halaman biodata saya!',
            'name' => 'Nama Anda',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
