<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    protected $table = 'detalle_compra';
    protected $primaryKey = 'id_detalle_compra';

    protected $fillable = [
        
        'id_compra',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'subtotal',
        
    ];
    public function productos(){
        return $this->hasMany(Producto::class,'id_producto');
    }
    public function compras(){
        return $this->hasMany(Compra::class,'id_compra');
    }
}
