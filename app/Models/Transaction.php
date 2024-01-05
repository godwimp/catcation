<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table ='transactions';
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'email',
        'cat_name',
        'price',
    ];
}
