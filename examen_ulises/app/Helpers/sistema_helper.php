<?php 
    function generar_codigo($longitud){

        $key = '';
        $pattern = '123456789abcdefghijklmnopqrstuvwxyz_ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $max = strlen($pattern)-1;

        for($i=0; $i < $longitud; $i++) $key .= $pattern[mt_rand(0, $max)];

        return $key;
    }

    function enviar($correo, $codigoActivacion){
        $email = \Config\Services::email();

        $data['respuesta'] = "";

        $array = array(
            'email' => $correo,
            'codigoActivacion' => $codigoActivacion,
            'base_url' => base_url()
        );

        $email->setFrom('ulisflores.23@gmail.com', 'Ulises');
        $email->setTo($correo);

        $email->setSubject('Verificacion de cuenta');

        $html = view('app\Views\html_activacion', $array);
        $data['msj'] =  $email->printDebugger(['headers']);
    }
?>