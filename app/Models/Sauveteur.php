<?php

namespace App\Models;

class Sauveteur extends Models
{
    use HasFactory;
     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'sauveteur';
    protected $primaryKey = 'id_sauveteur';
    public $timestamps = false;
}