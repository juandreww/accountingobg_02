<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelapaBakar extends Model
{
    use HasFactory;
    protected $table = 'trnkelapabakar';
    protected $primaryKey = 'uid';
    public $incrementing = false;
}
