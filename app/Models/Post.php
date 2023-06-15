<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model {
    use SoftDeletes;
    //table name if not same as model
    protected $table = "tbl_posts";
    //id if not "id"
    protected $primaryKey = "post_id";
    protected $dates = ['post_deleted_at'];

    protected $fillable = ['post_title', 'post_body', 'post_deleted_at'];

    public function user() {
        //class which field with relation wich id in search
        return $this->belongsTo(User::class, 'post_user_id', 'user_id');
    }

    public function photos() {
        return $this->morphMany(Photo::class, 'imageable');
    }

    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
