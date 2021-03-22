<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'Head',
        'Body',
        'Image',
        'Category_ID'
    ];

    public function users(){
        return $this->belongsTo('\App\Models\User','Author_ID','id');

    }
    public function categories(){
        return $this->belongsTo('\App\Models\Category','Category_ID','id');

    }
}
