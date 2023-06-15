<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    public function posts() {
        //destination table, connection table, foreign key what we looking for, foreign key what we use for connection
        return $this->hasManyThrough(Post::class, User::class, 'country_id', 'post_user_id');
    }
}
