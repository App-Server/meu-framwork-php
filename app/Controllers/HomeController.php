<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('home', [
            'titulo' => 'Meu Framework Base',
            'desc'   => 'Rodando no Railway/Square Cloud',
        ]);
    }
}