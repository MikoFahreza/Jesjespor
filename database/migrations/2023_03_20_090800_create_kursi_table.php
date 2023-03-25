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
 Schema::create('kursi', function (Blueprint $table) {
    $table->increments('id_kursi');
    $table->unsignedInteger('id_gerbong');
    $table->foreign('id_gerbong')->references('id_gerbong')->on('gerbong')->onDelete('cascade');
    $table->varchar('nama_kursi');
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down(): void
 {
 Schema::dropIfExists('kursi');
 }
};
