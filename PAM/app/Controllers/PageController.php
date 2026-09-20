<?php
declare(strict_types=1);
final class PageController
{
    private const PAGES = ['home' => ['title' => 'Merviq Technologies | Digital Transformation Partner', 'heading' => 'Home'], 'about' => ['title' => 'About Us | Merviq Technologies', 'heading' => 'About Us'], 'services' => ['title' => 'Services | Merviq Technologies', 'heading' => 'Services'], 'solutions' => ['title' => 'Products & Solutions | Merviq Technologies', 'heading' => 'Products / Solutions'], 'careers' => ['title' => 'Careers | Merviq Technologies', 'heading' => 'Careers'], 'blog' => ['title' => 'Insights | Merviq Technologies', 'heading' => 'Blog'], 'privacy' => ['title' => 'Privacy Policy | Merviq Technologies', 'heading' => 'Privacy Policy']];
    public function home(): void
    {
        $this->render('home');
    }
    public function about(): void
    {
        $this->render('about');
    }
    public function services(): void
    {
        $this->render('services');
    }
    public function solutions(): void
    {
        $this->render('solutions');
    }
    public function careers(): void
    {
        $this->render('careers');
    }
    public function blog(): void
    {
        $this->render('blog');
    }
    public function privacy(): void
    {
        $this->render('privacy');
    }
    private function render(string $page): void
    {
        View::render('pages/' . $page, self::PAGES[$page] + ['page' => $page]);
    }
}