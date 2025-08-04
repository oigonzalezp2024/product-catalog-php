<?php

// DatabaseConnection.php
// Esta clase centraliza la lógica de conexión a la base de datos.
// Es buena práctica usar un archivo de configuración o variables de entorno
// para las credenciales en una aplicación real.

namespace App\Infrastructure;

use PDO;
use PDOException;

class DatabaseConnection
{
    private static ?PDO $instance = null;
    private string $host = 'localhost';
    private string $db = 'poo_pdo_clients';
    private string $user = 'root';
    private string $pass = '';

    private function __construct()
    {
        try {
            self::$instance = new PDO(
                "mysql:host={$this->host};dbname={$this->db}",
                $this->user,
                $this->pass
            );
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            new self();
        }
        return self::$instance;
    }
}
