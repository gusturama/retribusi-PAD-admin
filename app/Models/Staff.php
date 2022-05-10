<?php

namespace App\Models;

use App\Models\User;
use App\Models\Banjar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "staff";
    protected $guarded = [
        'id'
    ];

    protected $dates = ['deleted_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function banjar()
    {
        return $this->belongsTo(Banjar::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
