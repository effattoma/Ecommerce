<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function patent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }


    
}
