<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacunas extends Model
{
    use HasFactory;


    protected $table = 'qrv_vacunas';
    public $timestamps = true;
}
