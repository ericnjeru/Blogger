<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;
use App\User;
class Blog extends Model
{
    /**
     * Get the author that wrote the posts.
     */
    public function writer()
    {
        return $this->belongsTo('App\User', 'author', 'id');
        //return $this->belongsTo(User::class);
    }
}
