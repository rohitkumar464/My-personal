<section class="page-hero">
    <div class="container">
        <p class="eyebrow">Merviq Technologies</p>
        <h1>Contact Us</h1>
        <p>Start with a conversation.</p>
    </div>
</section>
<section class="py-section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <h2>Let’s talk about what’s next.</h2>
                <p class="lead">Tell us where you want to go. We’ll bring the right people into the room.</p>
                <div class="contact-details">
                    <p><b>New business</b><br><a href="mailto:hello@merviq.com">hello@merviq.com</a></p>
                    <p><b>Call us</b><br>+91 80 4123 9080</p>
                    <p><b>Visit</b><br>25 Residency Road, Bengaluru 560025</p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <form class="contact-form" method="post" novalidate><?php if($success):?><div
                        class="alert alert-success"><?=htmlspecialchars($success)?></div>
                    <?php endif;?><?php if($error):?><div class="alert alert-danger"><?=htmlspecialchars($error)?></div>
                    <?php endif;?><div class="row g-3">
                        <div class="col-md-6"><label for="name">Your name *</label><input id="name" name="name"
                                value="<?=htmlspecialchars($old['name']??'')?>" required></div>
                        <div class="col-md-6"><label for="email">Work email *</label><input id="email" type="email"
                                name="email" value="<?=htmlspecialchars($old['email']??'')?>" required></div>
                        <div class="col-md-6"><label for="company">Company</label><input id="company" name="company"
                                value="<?=htmlspecialchars($old['company']??'')?>"></div>
                        <div class="col-md-6"><label for="phone">Phone</label><input id="phone" name="phone"
                                value="<?=htmlspecialchars($old['phone']??'')?>"></div>
                        <div class="col-12"><label for="inquiry">How can we help? *</label><textarea id="inquiry"
                                name="inquiry" rows="5" required><?=htmlspecialchars($old['inquiry']??'')?></textarea>
                        </div>
                        <div class="col-12"><button class="btn btn-primary btn-lg" type="submit">Send message →</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>