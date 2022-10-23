<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    protected $fillable = [
        "spouse",
        "spouseRO",
        "spouseTel",
        "profile_id"
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
