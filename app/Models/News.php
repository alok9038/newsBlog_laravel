<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    use HasFactory;

    protected $primaryKey = 'slug';
    public $incrementing = false;


    public function users()
    {
        

        return $this->hasOne('App\Models\user','id','user_id');
    }
}
