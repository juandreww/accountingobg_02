<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsingMoney extends Model
{
    use HasFactory;
    protected $table = 'trnusingmoney';
    protected $primaryKey = 'uid';
    public $incrementing = false;
}
