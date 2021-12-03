<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bateau extends Model
{
    use HasFactory;
    protected $table = 'bateau';
    protected $primaryKey = 'id_bateau';
    public $timestamps = false;
}