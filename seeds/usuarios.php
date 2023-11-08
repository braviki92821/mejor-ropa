<?php

require '../includes/app.php';
incluirTemplate('header');
use App\Usuario;

$usuario = new Usuario;
$password = password_hash('123456',  PASSWORD_BCRYPT);
$password2 = password_hash('654321',  PASSWORD_BCRYPT);
$admin = ['usuarios' =>[
    'nombre' => 'Brandon Jared',
    'apellido' => 'Ruiz Diaz',
    'correo' => 'correo@correo.com',
    'password' => strval($password),
    'tallaCamisaId' => '47',
    'tallaPantalonId' => '47',
    'tallaCalzadoId' => '25',
    'colorId' => '7',
    'tipo' => '1'
]];

$normal = ['usuarios' =>[
    'nombre' => 'Victoria',
    'apellido' => 'Olarte Martinez',
    'correo' => 'correo2@correo.com',
    'password' => strval($password2),
    'tallaCamisaId' => '47',
    'tallaPantalonId' => '47',
    'tallaCalzadoId' => '25',
    'colorId' => '7',
    'tipo' => '0'
]];

$usuarios = [ $admin, $normal];

for($i = 0; $i < sizeof($usuarios); $i ++){
    $usuario = new Usuario($usuarios[$i]['usuarios']);
    $usuario->guardar();
}