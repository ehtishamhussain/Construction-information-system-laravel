<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectusers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'projects_id'
    ];
    protected $hidden = [
        'password',
        
    ];
    public function projects(){
        return $this->belongsTo(projects::class);
    }
    public $timestamps=true;

}
