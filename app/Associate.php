<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    protected $fillable = [
        "associateName",
        "associateRO",
        "associateTel",
        "profile_id"
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
