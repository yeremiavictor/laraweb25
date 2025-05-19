<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModelSiteSetting extends Model
{
    //untuk setting utama website
    use HasFactory;
    protected $fillabe =[
        'logo','title','footer'
    ];
}
