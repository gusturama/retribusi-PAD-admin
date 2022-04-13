<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table = 'subscriptions';
    protected $guarded = [
        'id'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function company_scale()
    {
        return $this->belongsTo(CompanyScale::class);
    }

    public function subscription_type()
    {
        return $this->belongsTo(SubscriptionType::class);
    }
}
