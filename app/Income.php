<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function details(){
        return $this->hasMany(IncomeDetail::class, 'income_id');
    }
}
