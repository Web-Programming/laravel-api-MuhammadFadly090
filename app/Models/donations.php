<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donations extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 
        'funding_id', 
        'user_id'
    ];

    public function funding()
    {
        return $this->belongsTo(Funding::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
