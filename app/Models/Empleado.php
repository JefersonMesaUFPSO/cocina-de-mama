<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';

    protected $fillable = [
        
        'nombre',
        'telefono',
        'email',
        'cargo',
        'estado',
        
    ];
    public function clientes(){
        return $this->hasMany(Cliente::class);
    }
    
}
