<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleToUser extends Model
{
    use HasFactory;
    protected $table = 'role_user';
}
