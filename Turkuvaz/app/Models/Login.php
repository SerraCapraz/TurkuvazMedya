<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="users";
    protected $fillable=["username","usertitle","password","created_at","updated_at"];
}
