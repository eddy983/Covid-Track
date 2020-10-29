<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'file_url','file_name','file_size'
    ];

    // public function getImageAttribute($image)
    // {
    //     return asset($image);
    // }  
}
