<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    use HasFactory;

    protected $table = "repositorys";
    protected $guarded = ['id'];

    
    public function relationToUser(){
        return $this->belongsTo(User::class, 'id_user');
    }
    
}
