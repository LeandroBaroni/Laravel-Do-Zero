<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use softDeletes;
    protected $fillable = [
        'user_id', 'title', 'image', 'content'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
