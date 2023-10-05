<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $table;
    protected $fillable = ['User_id', 'nome', 'saldo'];
}
