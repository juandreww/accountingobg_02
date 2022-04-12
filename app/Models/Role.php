<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role01';
    protected $primaryKey = 'uid';
    public $incrementing = false;

    /**
     * Get the user that owns the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() { return $this->belongsTo(User::class, 'user', 'uid'); }
}
