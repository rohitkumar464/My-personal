<?php
declare(strict_types=1);
final class ContactMessage
{
    public function __construct(private readonly ?PDO $database)
    {
    }
    public function create(array $data): bool
    {
        if (!$this->database)
            return false;
        $statement = $this->database->prepare('INSERT INTO contact_messages (name,email,phone,company,inquiry) VALUES (:name,:email,:phone,:company,:inquiry)');
        return $statement->execute($data);
    }
}
