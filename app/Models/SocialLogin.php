<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLogin extends Model
{
    protected $table = "social_logins";

    protected $primaryKey = "idSocialLogin";
}
