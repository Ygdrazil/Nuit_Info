<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soumission extends Model
{
    use HasFactory;
    protected $table = 'soumission';
    protected $primaryKey = 'id_soumission';
    public $timestamps = false;
}