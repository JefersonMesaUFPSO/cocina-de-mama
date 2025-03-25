<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    use HasFactory;

    protected $table = 'metodos_pago';
    protected $primaryKey = 'id_metodo_pago';

    protected $fillable = [
        
        'nombre',
      
    ];
    public function carteras_metodos_pagos(){
        return $this->belongsTo(CarteraMetodoPago::class,'id_metodo_pago');
    }
    public function facturas_metodos_pagos(){
        return $this->hasmany(FacturaMetodoPago::class,'id_metodo_pago');
    }
}
