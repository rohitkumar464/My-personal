<?php
declare(strict_types=1);
final class Database
{
    public static function connect(string $configPath): ?PDO
    {
        if (!is_file($configPath))
            return null;
        require $configPath;
        try {
            return new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (Throwable $e) {
            error_log('Database connection failed: ' . $e->getMessage());
            return null;
        }
    }
}
