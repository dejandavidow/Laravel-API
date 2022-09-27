<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}