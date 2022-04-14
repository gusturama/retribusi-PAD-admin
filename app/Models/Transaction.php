<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded = [
        'id'
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
