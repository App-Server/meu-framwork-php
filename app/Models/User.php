<?php
namespace App\Models;

use App\Core\Model;

class User extends Model {
    public static function getAll() {
        $db = self::getDB();
        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }
}