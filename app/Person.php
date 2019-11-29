<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'external_url', 
    ];

    public function act(){
        return $this->belongsToMany('App\Movie', 'people_act_movies', 'id_person', 'id_movie');
    }

    public function direct(){
        return $this->belongsToMany('App\Movie', 'people_direct_movies', 'id_person', 'id_movie');
    }
}
