<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaMetodoPago extends Model
{
    use HasFactory;

    protected $table = 'factura_metodos_pago';

    protected $fillable = [
        
        'id_factura',
        'id_metodo_pago',
        'monto_pagado',
        
        
    ];
    public function facturas(){
        return $this->hasMany(Factura::class, 'id_factura');
    }
    public function metodosPagos(){
        return $this->belongsTo(MetodoPago::class, 'id_metodo_pago');
    }
}
