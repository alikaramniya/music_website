<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'user_id', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
