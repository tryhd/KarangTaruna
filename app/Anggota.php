<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table='anggota';
    protected $fillable=['nama','jenis_kelamin','alamat','email','keanggotan','status','tanggal_lahir'];
}
