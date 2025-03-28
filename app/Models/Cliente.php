<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
        'email',
        'documento',
        'estado',
        'registrado_por',
    ];
    
    public function ventas(){

        return $this->hasMany(Venta::class,'id_cliente');
    }
}
