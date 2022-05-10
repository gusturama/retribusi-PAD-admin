<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'companies';
    protected $guarded = [
        'id'
    ];
    protected $dates = ['deleted_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function banjar(){
        return $this->belongsTo(Banjar::class);
    }

    public function company_type()
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function companies_unpaid_transactions()
    {
        return $this->hasMany(CompaniesUnpaidTransaction::class);
    }
}
