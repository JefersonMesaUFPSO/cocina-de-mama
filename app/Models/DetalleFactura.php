<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;

    protected $table = 'detalle_factura';
    protected $primaryKey = 'id_detalle';

    protected $fillable = [
        
        'id_factura',
        'id_producto',
        'cantidad',
        'precio_unitario',
        'subtotal',
        
    ];
    public function productos(){
        return $this->hasMany(Producto::class,'id_producto');
    }
    public function facturas(){
        return $this->hasMany(Factura::class,'id_factura');
    }
}
