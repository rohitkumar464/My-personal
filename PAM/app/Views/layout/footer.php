</main>
<footer>
    <div class="container">
        <div class="row g-4 pb-5">
            <div class="col-lg-4"><a class="navbar-brand footer-brand" href="index.php"><span
                        class="brand-mark">M</span><span>MERVIQ</span><small>TECHNOLOGIES</small></a>
                <p class="mt-3">Engineering meaningful progress for ambitious organisations.</p>
            </div>
            <div class="col-6 col-lg-2">
                <h6>Explore</h6><a href="<?= route('about') ?>">About us</a><a
                    href="<?= route('services') ?>">Services</a><a href="<?= route('solutions') ?>">Solutions</a>
            </div>
            <div class="col-6 col-lg-2">
                <h6>Connect</h6><a href="<?= route('careers') ?>">Careers</a><a
                    href="<?= route('blog') ?>">Insights</a><a href="<?= route('contact') ?>">Contact</a>
            </div>
            <div class="col-lg-3">
                <h6>Stay in the know</h6>
                <p>Useful ideas, occasionally.</p>
                <form class="newsletter">
                    <input type="email" aria-label="Email address" placeholder="Your email">
                    <button aria-label="Subscribe">→</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">© <?= date('Y') ?> Merviq Technologies.
            <span>
                <a href="<?= route('privacy') ?>">Privacy policy</a> &nbsp; <a href="#">LinkedIn</a>
            </span>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>