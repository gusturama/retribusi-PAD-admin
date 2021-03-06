<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempekan extends Model
{
    use HasFactory;
    protected $table = 'tempekans';
    protected $guarded = [
        'id'
    ];

    public function banjar()
    {
        return $this->belongsTo(Banjar::class);
    }
}
