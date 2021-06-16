<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = "informations";

    protected $fillable = [
        'img',
        'titleTxt',
        'st',
        'textList1',
        'textList2',
        'textList3',

    ];
}
