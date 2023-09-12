<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'title',
        'description',
        'price',
        'category',
        'image'
    ];

    public function Admin(){
        return $this->belongsTo(Admin::class);
    }
}
