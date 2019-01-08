<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'id_incomes', 'id_expenses', 'resultado'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
