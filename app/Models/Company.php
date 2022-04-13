<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $guarded = [
        'id'
    ];

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
}
