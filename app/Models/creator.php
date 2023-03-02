<?php

namespace App\Models;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class creator extends Authenticatable
{
    use HasFactory;
    protected $perPage = 5;
    protected $guarded = [];
    public function post(){
      return $this->hasMany(post::class);
    }
}
