<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarteraMetodoPago extends Model
{
    use HasFactory;

    protected $table = 'cartera_metodo_pago';
    

    protected $fillable = [
        
        'id_cartera',
        'id_metodo_pago',
        'monto_pagado',
        
        
    ];
    public function carteras(){
        return $this->hasmany(Cartera::class,'id_cartera');
    }
    public function metodos_pagos(){
        return $this->hasmany(MetodoPago::class,'id_metodo_pago');
    }
}
