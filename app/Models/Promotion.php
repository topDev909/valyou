<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;


    public function entities(){
        return $this->hasMany(EntityPromotion::class, 'promotion_id', 'id');
    }
}
