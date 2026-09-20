<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Merviq Technologies</p>
        <h1>Products / Solutions</h1>
        <p>Products and platforms built for the way you work.</p>
    </div>
</section>
<section class="py-section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ([['Merviq Flow', 'Workflow automation that brings people, process and data into one clear view.'], ['Merviq Pulse', 'An actionable intelligence platform for faster, better business decisions.'], ['Merviq Connect', 'A flexible integration layer that makes your ecosystem work together.']] as [$t, $d]): ?>
                <div class="col-lg-4">
                    <article class="solution-card"><span class="solution-mark">M</span>
                        <h3><?= $t ?></h3>
                        <p><?= $d ?></p>
                        <ul>
                            <li>Secure by design</li>
                            <li>Built to scale</li>
                            <li>Ready to integrate</li>
                        </ul><a href="<?= route('contact') ?>" class="text-link">Request a demo →</a>
                    </article>
                </div><?php endforeach; ?>
        </div>
    </div>
</section>