<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'cosas' => 'perreria'
        ];
        return view('Pages/inicio',$data);
    }

    public function carga($dato)
    {
        $data = [
            'cosas' => 'perreria',
            'nombre' => $dato
        ];
        return view('Pages/inicia',$data);
    }
}
