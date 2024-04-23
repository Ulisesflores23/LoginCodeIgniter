<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuariosModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    }

    public function logged()
    {

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        
        $model = new UsuariosModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        var_dump($email);
        var_dump($password);
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            var_dump($pass);
            if ($pass === $password) {
                echo "chi";
                return redirect()->to('/inicio');
            } else {
                echo "ño";
                return redirect()->to('/login');
            }
        } else {
            echo "ño tas en bd";
            return redirect()->to('/login');
        }
    }
    protected function isLoggedIn()
    {
        $session = session();
        
        // Verificar si existe una variable de sesión que indique que el usuario ha iniciado sesión
        return $session->has('isLoggedIn') && $session->get('isLoggedIn') === true;
    }
}

