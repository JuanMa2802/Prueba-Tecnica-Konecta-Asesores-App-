<?php

namespace App\Controllers;

use App\Models\Usuario;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function inicio(){
        return view('inicio');
    }

    public function login(){

        $usuarioLogin = $this->request->getVar('Usuario');
        $clave = $this->request->getPost('clave');
        $usuario = new Usuario();

        $estad = $usuario->where('Estado', 0)->first();
        $datosUs = $usuario->ObtDatSes(['Usuario', $usuarioLogin]);

        if(!$usuario->ObtenerUsuario('Usuario', $usuarioLogin)){
            echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>Swal.fire('Any fool can use a computer')</script>";
            return redirect()->to(base_url('/'));
        }
        else if(!$usuario->ObtenerUsuario('Clave', $clave)){
            echo "Clave no válida";
            return redirect()->to(base_url('/'));
        }
        else if($datosUs[0]['Estado'] == 0){
            echo '<div>Usuario inactivo</div>';
            return redirect()->to(base_url('/'));
        }
        else{
            $data = [
                "Id" => $datosUs[0]['Id'],
                "Usuario" => $datosUs[0]['Usuario']
            ];
            $session = session();
            $session->set($data);

            return redirect()->to(base_url('/asesores'));

        }
    }

    public function cerrarSesion(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
