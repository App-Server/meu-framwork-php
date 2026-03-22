<?php
namespace App\Controllers;

use App\Core\Controller;

class ZeController extends Controller {
    public function index() {
        $this->view('ze-do-bairro', [
            'titulo' => 'Grupo Pimentel',
            'desc'   => 'Rodando no Railway/Square Cloud',
        ]);
    }
}