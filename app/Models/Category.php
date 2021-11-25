<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use softDeletes;

    protected $fillable = [
        'name', 'image'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
