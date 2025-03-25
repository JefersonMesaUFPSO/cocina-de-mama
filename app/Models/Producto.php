<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        
        'nombre',
        'precio',
        'stock',
        
        
    ];
    public function inventarios(){
        return $this->hasOne(Inventario::class,'id_producto');
    }

    public function detalle_compras(){
        return $this->belongsTo(DetalleCompra::class,'id_producto');
    }
    public function detalle_facturas(){
        return $this->belongsTo(DetalleFactura::class,'id_producto');
    }
}
