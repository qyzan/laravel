<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Upload extends Model
{
    use HasFactory, HasRoles;
    protected $fillable = [
        'user_id',
        'nama',
        'tag',
        'deskripsi',
        'file'
    ];

   /* public function user()
    {

        return $this->hasMany(User::class);
    } */

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
