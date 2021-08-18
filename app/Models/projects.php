<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table='projects';
    protected $primarykey='id';
    protected $fillable=['project_name','address','land_area','project_status'];
    

    public function projectusers(){
        return $this->hasMany(projectusers::class);
    }

    public function materials(){
        return $this->hasMany(materials::class);
    }
    public function workers(){
        return $this->hasMany(workers::class);
    }
    public $timestamps=true;

}
