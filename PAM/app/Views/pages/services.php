<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Merviq Technologies</p>
        <h1>Services</h1>
        <p>Focused capabilities. Lasting business value.</p>
    </div>
</section>
<section class="py-section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ([['Digital Strategy', 'Turn uncertainty into a clear, focused path forward.'], ['Product Engineering', 'Create performant products from concept to continuous delivery.'], ['Cloud Transformation', 'Modernise platforms and unlock flexibility.'], ['Data & AI', 'Make better decisions with trusted data.'], ['Customer Experience', 'Design connected journeys that earn loyalty.'], ['Managed Services', 'Keep critical systems secure and improving.']] as $x): ?>
                <div class="col-md-6 col-lg-4">
                    <article class="service-card filled">
                        <div class="service-icon">✦</div>
                        <h3><?= $x[0] ?></h3>
                        <p><?= $x[1] ?></p><a href="<?= route('contact') ?>">Talk to an expert →</a>
                    </article>
                </div><?php endforeach; ?>
        </div>
    </div>
</section>