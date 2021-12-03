<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauvetage extends Model
{
    use HasFactory;
    protected $table = 'sauvetage';
    protected $primaryKey = 'id_sauvetage';
    public $timestamps = false;
}
