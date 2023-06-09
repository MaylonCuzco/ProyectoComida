<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'imagen',
        'precio_unitario',
        'categoria'
    ];
    public function scopeByCategory($query, $category)
{
    return $query->where('categoria', $category);
}
}
