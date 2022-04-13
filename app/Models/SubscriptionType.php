<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
    use HasFactory;
    protected $table = 'subscription_types';
    protected $guarded = [
        'id'
    ];
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
