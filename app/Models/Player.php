<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'team',
        'position',
        'age',
        'nationality',
        'market_value',
        'transfermarkt_id'
    ];
}
