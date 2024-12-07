<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'judul',
        'subjudul',
        'kategori',
        'deadline',
        'deskripsi'
    ];

    public function scopeSearch($query, $term)
    {
        return $query->where('judul', 'LIKE', "%{$term}%")
                     ->orWhere('subjudul', 'LIKE', "%{$term}%");
    } 
}
