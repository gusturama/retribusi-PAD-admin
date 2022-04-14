<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesUnpaidTransaction extends Model
{
    use HasFactory;
    protected $table = 'companies_unpaid_transaction';
    protected $guarded = [
        'id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
