<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
 /**
 * Run the migrations.
 *@return void
 */
 public function up()
 {
 Schema::create('transaksi', function (Blueprint $table) {
    $table->increments('invoice');
    $table->unsignedInteger('id_jadwal');
    $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal')->onDelete('cascade');
    $table->unsignedInteger('id_metode_pembayaran');
    $table->foreign('id_metode_pembayaran')->references('id_metode_pembayaran')->on('metode_pembayaran')->onDelete('cascade');
    $table->unsignedInteger('id_user');
    $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
    $table->timestamps('waktu');
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down()
 {
 Schema::dropIfExists('kursi');
 }
};
