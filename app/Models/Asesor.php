<?php 
namespace App\Models;

use CodeIgniter\Model;

class Asesor extends Model{
    protected $table      = 'adviser';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Nombre', 'Cedula', 'Telefono', 'Fecha_Nacimiento', 'Edad', 'Genero', 'Cliente', 'Sede_trabajo', 'Usuario_regis_id', 'Fecha_registro'];
}