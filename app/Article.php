<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','key_word','content'];

    public function user() {

        return $this->belongsTo('App\User');
    }
}
