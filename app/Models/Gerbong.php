<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerbong extends Model
{
    use HasFactory;

    protected $table = 'gerbong';
    protected $primaryKey = 'id_gerbong';

    protected $fillable = [
        'nama_gerbong'
    ];
}
