<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = "commandes";
    protected $fillable = [
        'id',
        'article_id',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function articles(){
        return $this->belongsTo('App\Article');
    }
}
