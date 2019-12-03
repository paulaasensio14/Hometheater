<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'year', 'duration', 'rating', 'cover', 'filepath', 'filename', 'external_url' 
    ];

    public function genres(){
        return $this->belongsToMany('App\Genre', 'genres_movies', 'id_movies', 'id_genres');
    }

    public function actors(){
        return $this->belongsToMany('App\Person', 'people_act_movies', 'id_movie', 'id_person');
    }

    public function directors(){
        return $this->belongsToMany('App\Person', 'people_direct_movies', 'id_movie', 'id_person');
    }

    public function indexesList($field){
        $list = array();
        foreach ($this->$field as $token){
            $list[] = $token->id;
        }
        return $list;
    }

}
 