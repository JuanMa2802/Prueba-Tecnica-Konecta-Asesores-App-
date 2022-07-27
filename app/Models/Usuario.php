<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'user';

    protected $primaryKey = 'Id';
    protected $returnType = Usuario::class;
    protected $allowedFields = ['Usuario','Clave'];

    public function ObtDatSes($data){
        $Usuario = $this->db->table('user');
        return $Usuario->get()->getResultArray();
    }

    public function ObtenerUsuario(string $columna, string $valor){
        return $this->where($columna, $valor)->first();
    }
}