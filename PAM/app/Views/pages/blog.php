<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Merviq Technologies</p>
        <h1>Blog</h1>
        <p>Ideas for people shaping what’s next.</p>
    </div>
</section>
<section class="py-section">
    <div class="container">
        <div class="row g-4">
            <?php foreach ([['The operating model for an AI-ready business', 'Strategy', '6 min read'], ['Why modernisation needs a product mindset', 'Engineering', '5 min read'], ['Designing trust into every customer journey', 'Experience', '4 min read']] as [$t, $tag, $time]): ?>
                <div class="col-md-4">
                    <article class="article-card">
                        <div class="article-image"></div><span class="tag"><?= $tag ?></span>
                        <h3><?= $t ?></h3>
                        <p><?= $time ?></p><a href="#">Read insight →</a>
                    </article>
                </div><?php endforeach; ?>
        </div>
    </div>
</section>