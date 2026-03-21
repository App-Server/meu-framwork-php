<?php
namespace App\Core;

use PDO;
use PDOException;

abstract class Model {
    private static $instance;

    protected static function getDB() {
        if (!self::$instance) {
            try {
                // Pega as variáveis do .env que você já carregou no index.php
                $host = $_ENV['DB_HOST'];
                $db   = $_ENV['DB_NAME'];
                $user = $_ENV['DB_USER'];
                $pass = $_ENV['DB_PASS'];
                $port = $_ENV['DB_PORT'] ?? '3306';

                $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
                
                self::$instance = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
            } catch (PDOException $e) {
                // Em produção, você logaria isso. No dev, exibimos o erro.
                die("Erro na conexão com o banco: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}