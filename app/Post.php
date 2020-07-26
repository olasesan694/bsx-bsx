<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText; // Laravel Trix Editor

class Post extends Model
{
    
    // use HasTrixRichText; // Laravel Trix Editor


    /** CAN CHECK DOCUMENTATION FOR MORE  */
    // Table name
    protected $table = 'blogs';
    // Primary key
    public $primaryKey = 'id';
    
    protected $fillable = ['title', 'body'];

    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User'); // a single post belongs to a user
    }
}
