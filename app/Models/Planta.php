<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'user_id'];
    protected $table = 'plants';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
