<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{    use HasFactory;
    protected $table = 'train';
    protected $fillable = [
        'url',
        'hashname',
        'originalname',
        'cropName',
        'sickNameKor',
        'confidence',
        'user',
        'userOpinion'
    ];
    public $timestamps = True;
}
