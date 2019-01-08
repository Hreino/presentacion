<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeDetail extends Model
{
    protected $fillable = [ 'income_id', 'subcategory', 'amount'];

    public function income(){
        return  $this->belongsTo(Income::class);
    }
}
