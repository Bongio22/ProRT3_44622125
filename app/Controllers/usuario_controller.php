<?php
namespace App\Controllers;

use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create() 
    {
        $data['titulo'] = 'Registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        $validation = \Config\Services::validation();

        $input = $this->validate([
            'nombre' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'El campo nombre es obligatorio.',
                    'min_length' => 'El campo nombre debe tener al menos 3 caracteres.'
                ]
            ],
            'apellido' => [
                'rules' => 'required|min_length[3]|max_length[25]',
                'errors' => [
                    'required' => 'El campo apellido es obligatorio.',
                    'min_length' => 'El campo apellido debe tener al menos 3 caracteres.',
                    'max_length' => 'El campo apellido no debe exceder los 25 caracteres.'
                ]
            ],
            'usuario' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'El campo usuario es obligatorio.',
                    'min_length' => 'El campo usuario debe tener al menos 3 caracteres.'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[usuarios.email]',
                'errors' => [
                    'required' => 'El campo email es obligatorio.',
                    'valid_email' => 'El campo email debe contener una dirección de correo electrónico válida.',
                    'is_unique' => 'El email ingresado ya está registrado.'
                ]
            ],
            'pass' => [
                'rules' => 'required|min_length[10]|max_length[50]',
                'errors' => [
                    'required' => 'El campo contraseña es obligatorio.',
                    'min_length' => 'El campo contraseña debe tener al menos 10 caracteres.',
                    'max_length' => 'El campo contraseña no debe exceder los 50 caracteres.'
                ]
            ],
            'repass' => [
                'rules' => 'required|matches[pass]',
                'errors' => [
                    'required' => 'El campo repetir contraseña es obligatorio.',
                    'matches' => 'Las contraseñas no coinciden.'
                ]
            ],
        ]);

        if (!$input) {
            $data['titulo'] = 'Registrarse';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro', ['validation' => $this->validator]);
            echo view('front/footer_view');
        } else {
            $formModel = new Usuarios_model();
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'repass' => password_hash($this->request->getVar('repass'), PASSWORD_DEFAULT)
            ]);

            session()->setFlashdata('success', 'Usuario registrado con éxito!');
            return redirect()->to('/registro'); // Redirige a la misma página de registro
        }
    }
}
