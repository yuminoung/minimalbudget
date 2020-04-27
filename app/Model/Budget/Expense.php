<?php

namespace App\Model\Budget;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['amount', 'date', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
