<?php
declare(strict_types=1);
final class ContactController
{
    public function __construct(private readonly ?PDO $database)
    {
    }
    public function show(): void
    {
        $this->render();
    }
    public function store(): void
    {
        $data = ['name' => trim((string) ($_POST['name'] ?? '')), 'email' => filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL), 'phone' => trim((string) ($_POST['phone'] ?? '')), 'company' => trim((string) ($_POST['company'] ?? '')), 'inquiry' => trim((string) ($_POST['inquiry'] ?? ''))];
        if (!$data['name'] || !$data['email'] || !$data['inquiry']) {
            $this->render('Please complete your name, a valid email address, and your message.', '', $data);
            return;
        }
        try {
            (new ContactMessage($this->database))->create($data);
        } catch (Throwable $e) {
            error_log('Contact form error: ' . $e->getMessage());
        }
        $this->render('', 'Thank you — our team will be in touch within one business day.');
    }
    private function render(string $error = '', string $success = '', array $old = []): void
    {
        View::render('pages/contact', compact('error', 'success', 'old') + ['title' => 'Contact Us | Merviq Technologies', 'heading' => 'Contact Us', 'page' => 'contact']);
    }
}