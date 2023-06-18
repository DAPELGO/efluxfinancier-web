<?php

namespace App\Models\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use Notifiable;
    protected $guarded = [];
}
