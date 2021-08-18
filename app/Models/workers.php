<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    use HasFactory;
    public function projects(){
        return $this->belongsTo(projects::class);
    }
    protected $fillable=['projects_id','name','father_name','address', 'phone','expertise','started_working'];

    
}
