<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_member, id_group'];
    public $table = 'members';
}
