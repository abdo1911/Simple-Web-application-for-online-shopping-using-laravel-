<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = ['name'];

    function products()
    {
        return $this->hasMany(product::class,'category_id','id');
    }
}
