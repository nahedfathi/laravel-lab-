<?php

namespace App\Models;
use App\Models\creator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $perPage = 5;
   // public $timestamps = false;
    protected $guarded = [];
    public function creator(){
      return $this->belongsTo(creator::class);
    }
 
    
}
