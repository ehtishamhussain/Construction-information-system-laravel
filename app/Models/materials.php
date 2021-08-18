<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materials extends Model
{
    use HasFactory;
    protected $fillable=['projects_id','material','material_brand','material_supplier','material_quantity','material_price','added_on'];
    public function projects(){
        return $this->belongsTo(projects::class);
    }
    public $timestamps=true;
    
}
