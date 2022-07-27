<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Asesor;

class AsesoresController extends Controller{

    public function index(){
        
        $asesores = new Asesor();
        $datos['asesores'] = $asesores->orderBy('Id', 'ASC')->findAll();

        $datos['cabecera'] = view('template/header');
        $datos['pie'] = view('template/footer');

        return view('Asesores', $datos);
    }

    public function RegistarAsesor(){
        $asesor = new Asesor();

        $datos=[
            'Nombre' => $this->request->getVar('Nombre'),
            'Cedula' => $this->request->getVar('Cedula'),
            'Telefono' => $this->request->getVar('Telefono'),
            'Fecha_Nacimiento' => $this->request->getVar('Fecha_Nac'),
            'Edad' => $this->request->getVar('Edad'),
            'Genero' => $this->request->getVar('Genero'),
            'Cliente' => $this->request->getVar('Cliente'),
            'Sede_trabajo' => $this->request->getVar('Sede_trabajo'),
            'Usuario_regis_id' => $this->request->getVar('Usuario_regis_id'),
            'Fecha_registro' => $this->request->getVar('Fecha_registro'),

        ];

        // var_dump($datos);
        $asesor->insert($datos);
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Registro guardado correctamente',
            showConfirmButton: false,
            timer: 1500
          })
        
        </script>";

        return $this->response->redirect(site_url('asesores'));
    }

    public function ModificarAsesor(){
        $asesor = new Asesor();

        $datos=[
            'Nombre' => $this->request->getVar('Nombre'),
            'Cedula' => $this->request->getVar('Cedula'),
            'Telefono' => $this->request->getVar('Telefono'),
            'Fecha_Nacimiento' => $this->request->getVar('Fecha_Nac'),
            'Edad' => $this->request->getVar('Edad'),
            'Genero' => $this->request->getVar('Genero'),
            'Cliente' => $this->request->getVar('Cliente'),
            'Sede_trabajo' => $this->request->getVar('Sede_trabajo'),
            'Usuario_regis_id' => $this->request->getVar('Usuario_regis_id'),
            'Fecha_registro' => $this->request->getVar('Fecha_registro'),

        ];
        $id = $this->request->getVar('Id');
        $asesor->update($id, $datos);

        return $this->response->redirect(site_url('asesores'));
    }

    public function BorrarAsesor($id=null) {
        $asesor = new Asesor();
        $datosAsesor = $asesor->where('id', $id)->first();

        $asesor->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('asesores'));
    }

}