<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $gaurded = ['id'];
    protected $fillable = ['title','content','user_id'];
    public $timestamps = false;

}
