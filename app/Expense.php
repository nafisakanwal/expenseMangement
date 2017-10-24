<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
