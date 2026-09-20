<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p class="eyebrow text-light">Technology that moves business forward</p>
                <h1>Build your <em>next advantage.</em></h1>
                <p class="hero-copy">Merviq Technologies brings strategy, design and engineering together to help
                    ambitious companies grow with confidence.</p>
                <div class="d-flex flex-wrap gap-3"><a href="<?=route('contact')?>" class="btn btn-accent btn-lg">Start
                        a conversation →</a><a href="<?=route('services')?>"
                        class="btn btn-outline-light btn-lg">Explore capabilities</a></div>
                <div class="hero-stats">
                    <div><strong>12+</strong><span>Years of expertise</span></div>
                    <div><strong>150+</strong><span>Projects delivered</span></div>
                    <div><strong>98%</strong><span>Client retention</span></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-art">
                    <div class="orb orb-one"></div>
                    <div class="orb orb-two"></div>
                    <div class="art-card card-one"><span>Cloud native</span><strong>Future-ready</strong></div>
                    <div class="art-card card-two"><i>↗</i><span>Digital<br>velocity</span></div>
                    <div class="grid-lines"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-section client-strip">
    <div class="container">
        <p class="text-center eyebrow">Trusted by teams creating meaningful change</p>
        <div class="d-flex justify-content-around flex-wrap logos">
            <span>NOVARA</span><span>ACENTRIC</span><span>Vertex</span><span>ORBITAL</span><span>nexera</span></div>
    </div>
</section>
<section class="wix-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="eyebrow">Wix platform development</p>
                <h2>Make your Wix site work harder for your business.</h2>
                <p class="lead">We develop tailored Wix applications and integrations that turn your website into a connected, scalable business platform.</p>
                <a href="<?=route('contact')?>" class="btn btn-primary">Discuss your Wix project &rarr;</a>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="wix-card"><span class="wix-logo">WIX</span><h3>Custom Wix solutions</h3><ul><li>Custom Wix Velo applications</li><li>Third-party API integrations</li><li>Member, booking and ecommerce workflows</li><li>Automated data and business processes</li></ul></div>
            </div>
        </div>
    </div>
</section>
<section class="py-section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-lg-7">
                <p class="eyebrow">What we do</p>
                <h2>Expertise designed around your goals.</h2>
            </div>
            <div class="col-lg-4 ms-auto">
                <p class="muted mb-0">We pair deep technical knowledge with a practical understanding of how business
                    gets done.</p>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach([['01','Digital Engineering','Modern, resilient applications that people enjoy using.'],['02','Cloud & Data','A secure foundation for insight, speed and scale.'],['03','Experience Design','Useful experiences shaped around real human needs.']]as[$n,$t,$d]):?>
            <div class="col-md-4">
                <article class="service-card"><span class="number"><?=$n?></span>
                    <div class="service-icon">↗</div>
                    <h3><?=$t?></h3>
                    <p><?=$d?></p><a href="<?=route('services')?>">Discover more →</a>
                </article>
            </div><?php endforeach;?></div>
    </div>
</section>
<section class="impact">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="eyebrow text-light">Our approach</p>
                <h2>Progress is a team sport.</h2>
                <p>We work closely with your people from the first sketch to lasting impact. Our teams bring clarity to
                    complex challenges and turn ideas into outcomes.</p><a href="<?=route('about')?>"
                    class="text-link light">Meet Merviq →</a>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="approach-list">
                    <div><b>01</b><span>Understand the opportunity</span></div>
                    <div><b>02</b><span>Design the right solution</span></div>
                    <div><b>03</b><span>Deliver and evolve together</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta">
    <div class="container text-center">
        <p class="eyebrow text-light">A better future starts with a conversation</p>
        <h2>Let’s make something<br><em>remarkable.</em></h2><a href="<?=route('contact')?>"
            class="btn btn-accent btn-lg">Tell us what’s possible →</a>
    </div>
</section>
