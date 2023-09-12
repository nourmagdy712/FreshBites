<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'phone',
        'guests_N',
        'time'
    ];
    public function Admin(){
        return $this->belongsTo(Admin::class);
    }
}
