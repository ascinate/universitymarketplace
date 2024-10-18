<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'userid',
        'category',
        'location',
        'city',
        'address',
        'zip',
        'name',
        'phone',
        'email',
        'price',
        'transaction',
        'conditions',
        'item_title',
        'item_description',
        'photos',
    ];
}
