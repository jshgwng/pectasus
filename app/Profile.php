<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        "caseRef", 
        "station", 
        "offence", 
        "briefOnCase",
        "name", 
        "sex", 
        "age", 
        "nationality", 
        "nin", 
        "otherId", 
        "tribe", 
        "religion", 
        "maritalStatus", 
        "placeOfBirth", 
        "presentAddress", 
        "telephoneContact", 
        "distinguishFeatures", 
        "height", 
        "bodybuild", 
        "eyeColour", 
        "hairColour", 
        "levelOfEducation", 
        "occupation", 
        "father", 
        "fatherRO", 
        "fatherTel", 
        "mother", 
        "motherRO", 
        "motherTel", 
        "languagesSpoken", 
        "travelHistory", 
        "previousCriminalRecord", 
    ];

    public function spouses()
    {
        return $this->hasMany(Spouse::class);
    }

    public function associates()
    {
        return $this->hasMany(Associate::class);
    }
}
