<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "articles";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'categorie',
        'amount',
        'price'
    ];
}
