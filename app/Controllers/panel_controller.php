<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class panel_controller extends Controller{
    public function index(){
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

        
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data['perfil_id']=$perfil;

        $dato['titulo'] = 'Panel del usuario';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado', $data);
        echo view('front/footer_view');
    }

    public function panelAdmin(){
        $dato['titulo'] = 'Panel del adminstrador';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/panelAdmin');
        echo view('front/footer_view');

    }

    public function panelUsuario(){
        $dato['titulo'] = 'Panel del Usuario';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/panelUsuario');
        echo view('front/footer_view');

    }


}
