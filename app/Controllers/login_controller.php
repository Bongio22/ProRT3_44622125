<?php
namespace App\Controllers;

use App\Models\usuarios_model;
use CodeIgniter\Controller;

class Login_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarios_model();

        // Se traen los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();

        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login');
            }

            // Verifica si los datos ingresados pasan la verificación
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'usuario' => $data['usuario'],
                    'email' => $data['email'],
                    'perfil_id' => $data['perfil_id'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido');
                return redirect()->to('principal');

            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('msg', 'Correo no encontrado');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
