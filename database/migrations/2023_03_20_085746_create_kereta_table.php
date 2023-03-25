<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
 /**
 * Run the migrations.
 *
 */
 public function up():void
 {
 Schema::create('kereta', function (Blueprint $table) {
    $table->increments('id_kereta');
    $table->varchar('id_gerbong');
    $table->integer('total_kursi');
    $table->varchar('nama_kereta');
    $table->varchar('jenis_kereta');
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down(): void
 {
 Schema::dropIfExists('kereta');
 }
};
