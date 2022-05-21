<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masukan extends Model
{
    use HasFactory;

    protected $table = 'masukan';
    protected $primaryKey = 'id';
    
    protected $dates = ['created_at'];

    protected $fillable = [
        'user_id','isi_pesan','artikel_id'
    ];
}
