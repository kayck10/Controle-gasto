<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $table;
    protected $fillable = ['valor','Conta_id', 'data', 'tipo', 'descricao'];
}
