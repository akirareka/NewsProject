<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'judul', 'author', 'isi_artikel', 'foto', 'top_news', 'status'
    ];
}
