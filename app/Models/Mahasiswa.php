<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'jurusan',
        'prodi',
    ];

    // public function scopeFilter(Builder $query, $filters = [])
    // {
    //     $filters = is_array($filters) ? $filters : $filters->all();

    //     if (isset($filters['q'])) {
    //         $query->where(function ($q) use ($filters) {
    //             $q->where('nim', 'LIKE', '%'.$filters['q'].'%')
    //                 ->orWhere('nama', 'LIKE', '%'.$filters['q'].'%')
    //                 ->orWhere('email', 'LIKE', '%'.$filters['q'].'%');
    //         });
    //     }

    //     return $query;
    // }
}
