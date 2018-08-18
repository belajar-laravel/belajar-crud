<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // primary key
    protected $primaryKey = "nip";
    public $incrementing = false;
    protected $keyType = 'string';
}
