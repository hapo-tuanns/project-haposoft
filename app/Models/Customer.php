<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'manager', 'email', 'address', 'phone';
    ]
}
 public function projects()
 {
     return $this->hasMany('Project::class');
 }