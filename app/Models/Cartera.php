<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartera extends Model
{
    use HasFactory;

    protected $table = 'cartera';
    protected $primaryKey = 'id_cartera';

    protected $fillable = [
        
        'id_cliente',
        'saldo',
        'ultimo_pago',
        
        
    ];
    public function clientes(){
        return $this->hasOne(Cliente::class,'id_cliente');
    }
}
