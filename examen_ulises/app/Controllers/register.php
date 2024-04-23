<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class Register extends BaseController
{
    public $encrypter;
    public function __construct()
    {
        helper(array('url','sistema','date'));
    }
    public function index()
    {
        return view('register');
    }

    public function guardar()
    {

        $r = array();

        $correo = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password2 = $this->request->getPost('password2');
        $Usuario = new UsuariosModel();

        $userInfo =  $Usuario->info($correo);

        if ($userInfo ) {
            $r['respuesta'] = 'no';
            $r['msj'] = 'The user already exists';
            echo   json_encode($r);
            exit();
        }


        $data = array(
            'email' => $correo,
            'pass' => $password
        );


        $usuario = $Usuario->guardar($data);

        if ($usuario) {

            $r['respuesta'] = 'si';
            $r['msj'] = 'User registered';
        } else {
            $r['respuesta'] = 'no';
            $r['msj'] = 'something wrong happend';
        }
        echo json_encode($r);
        exit();
    }
}
