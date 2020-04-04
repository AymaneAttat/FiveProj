<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = [
        'id',
        'name',
        'category',
        'description',
        'cover_image',
        'user_id',
        'prix',
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function commandes(){
        return $this->hasMany('App\Commande');
    }
}
