<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected  $guarded = [];


    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/nwRproxD40q6YoUbhiaaFEHNUfDf99aOn5dBkCP1.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }


    public function  user()
    {
        return $this->belongsTo(User::class);
    }
}
