<?php
namespace App\Core;

abstract class Controller {
    protected function view(string $view, array $data = []) {
        extract($data);
        $viewPath = "../views/{$view}.php";

        if (file_exists($viewPath)) {
            // Carrega o layout, que por sua vez dará 'require' no $viewPath
            require_once "../views/layout.php";
        } else {
            die("View {$view} não encontrada.");
        }
    }
}