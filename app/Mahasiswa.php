<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['user_id','npm','tgl_lahir','tempat_lahir','telepon','alamat','gender'];
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}

