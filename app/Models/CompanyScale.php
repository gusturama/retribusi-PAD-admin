<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyScale extends Model
{
    use HasFactory;
    protected $table = 'company_scales';

    protected $guarded = [
        'id'
    ];


    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
