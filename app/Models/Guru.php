<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $increments = false;

    protected $table = 'tb_guru';
    protected $primaryKey = 'nip';
    protected $keyType = 'string';
    protected $guarded = [];
}
