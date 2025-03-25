<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';

    protected $fillable = [
        
        'id_cliente',
        'fecha_venta',
        'total',
        
    ];
    
    public function clientes(){
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
    public function facturas(){
        return $this->hasMany(Factura::class, 'id_venta');
    }
}
