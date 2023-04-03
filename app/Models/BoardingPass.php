<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingPass extends Model
{
    use HasFactory;

    protected $table = 'boarding_pass';
    protected $primaryKey = 'id_Boarding';

    protected $fillable = [
        'tanggal'
    ];

    protected $casts = [
        'tanggal' => 'datetime:d-m-Y H:i:s'
    ];
}
