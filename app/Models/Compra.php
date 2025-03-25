<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $primaryKey = 'id_compra';

    protected $fillable = [
        
        'id_proveedor',
        'fecha',
        'total',
        
    ];
    public function detalle_compras(){
        return $this->belongsTo(DetalleCompra::class,'id_compra');
    }  
}
