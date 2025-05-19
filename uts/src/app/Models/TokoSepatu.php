<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoSepatu extends Model
{
    use HasFactory;

    protected $fillable = ['Tipe', 'Size', 'Harga'];

    public $timestamps = false; // Nonaktifkan pengelolaan timestamps
}
