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
 Schema::create('gerbong', function (Blueprint $table) {
    $table->increments('id_gerbong');
    $table->varchar('nama_gerbong');
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down(): void
 {
 Schema::dropIfExists('gerbong');
 }
};
