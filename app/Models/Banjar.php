<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Tempekan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banjar extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'banjars';
    protected $guarded = [
        'id'
    ];

    protected $dates = ['deleted_at'];




    public function tempekans()
    {
        return $this->hasMany(Tempekan::class);
    }
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
