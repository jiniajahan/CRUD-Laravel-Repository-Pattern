<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id','title','body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $s){

        return $query->where('title', 'like','%' .$s. '%')
                    ->orWhere('body', 'like', '%' .$s. '%');
    }

}
