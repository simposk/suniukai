<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['type', 'title', 'body', 'price', 'phone_number', 'email', 'city', 'area', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
