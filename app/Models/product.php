<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'harga',
        'stock',
        'diskon'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Category(){
        return $this->hasOne(Category::class);
    }
}
