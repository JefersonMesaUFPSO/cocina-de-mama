<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventario';
    protected $primaryKey = 'id_inventario';

    protected $fillable = [
        
        'id_producto',
        'cantidad_disponible',
        
    ];
    public function productos(){
        return $this->hasOne(Inventario::class,'id_producto');
    }
}
