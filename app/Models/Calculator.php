<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
 protected $fillable = [
        'nama',
        'jenis_kelamin',
        'usia',
        'tinggi_badan',
        'berart_badan',
        'hasil',
    ];

protected $hidden = [
        
    ];
    
}