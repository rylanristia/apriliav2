<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TxtsenderModel extends Model
{
    use HasFactory;

    protected $table = 'txt_wish';

    protected $fillable = [
        'image',
        'name',
        'description',
    ];
}