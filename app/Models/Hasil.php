<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;
    protected $table = 'hasil';
    protected $fillable = [
        'klub1',
        'klub2',
        'gol1',
        'gol2',
    ];
}
