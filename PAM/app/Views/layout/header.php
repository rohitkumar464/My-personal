<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Merviq Technologies">
    <title><?= htmlspecialchars($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body><?php function route(string $name): string
{
    return $name === 'home' ? 'index.php' : 'index.php?page=' . $name;
} ?>
    <div class="topbar">
        <div class="container d-flex justify-content-between"><span>Engineering what’s next.</span><span
                class="d-none d-md-inline">hello@merviq.com &nbsp; | &nbsp; +91 80 4123 9080</span></div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container"><a class="navbar-brand" href="index.php"><span
                    class="brand-mark">M</span><span>MERVIQ</span><small>TECHNOLOGIES</small></a><button
                class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <?php foreach (['home' => 'Home', 'about' => 'About Us', 'services' => 'Services', 'solutions' => 'Solutions', 'careers' => 'Careers', 'blog' => 'Blog'] as $key => $label): ?>
                        <li class="nav-item"><a class="nav-link <?= $page === $key ? 'active' : '' ?>"
                                href="<?= route($key) ?>"><?= $label ?></a></li><?php endforeach; ?>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary btn-sm px-3" href="<?= route('contact') ?>">Let’s talk →</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>