<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** CAN CHECK DOCUMENTATION FOR MORE  */
    // Table name
    protected $table = 'blogs';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User'); // a single post belongs to a user
    }
}
