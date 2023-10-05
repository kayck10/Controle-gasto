<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $table;
    protected $fillable = ['Conta_id', 'data', 'valor', 'descricao'];
}
