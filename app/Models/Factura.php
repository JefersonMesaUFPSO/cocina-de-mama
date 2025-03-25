<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';
    protected $primaryKey = 'id_factura';

    protected $fillable = [
        
        'id_venta',
        'fecha',
        'total',
        
    ];
    
    public function ventas(){
        return $this->belongsTo(Venta::class, 'id_venta');
    }
    public function detallefacturas(){
        return $this->belongsTo(DetalleFactura::class, 'id_factura');
    }
    public function factura_metodos_pagos(){
        return $this->belongsTo(FacturaMetodoPago::class, 'id_factura');
    }
}
