<?php

namespace App;

use App\Expense;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function expenses()
    {
        return $this->hasOne(Expense::class);
    }
}
