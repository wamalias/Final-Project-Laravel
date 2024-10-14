<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'category_id');
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }
}
