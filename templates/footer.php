<section id="footer" role="footer">
    <footer class="container">
        <div class="one-third column">
            <h3>Quick About.</h3>
            <a title="Learn more about Duane Anderson" href="<?php bloginfo('url'); ?>/bio" class="img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt=""></a>
            <p>That's me. On a good day. The rest of the time I am wearing jeans and a t-shirt, coding, designing or hanging with my son. <a href="<?php bloginfo('url') ?>/bio" title="more about Duane">more here</a></p>
        </div>
        <div class="one-third column">
            <h3>Contact Me</h3>
            <p>I am always interested in opinions that help me improve, so if you have ideas or just want to connect about a potential project, reach out. The best way to contact me is via <a href="mailto:duane@dkanderson.com" title="Send me an email">email</a>.</p>
        </div>
        <div class="one-third column">
            <h3>Social</h3>
            <p>I try my best at social networking when I can but I should warn you I am not very good at it. My feable attempt are summed up below: </p>
            <nav class="social-icons">
                <a href="http://twitter.com/dkanderson"><svg class="icon icon-twitter" viewBox="0 0 32 32"><use xlink:href="#icon-twitter"></use></svg></a>
                <a href="http://instagram.com/webmatrixja"><svg class="icon icon-instagram" viewBox="0 0 32 32"><use xlink:href="#icon-instagram"></use></svg></a>
                <a href="http://www.linkedin.com/in/dkanderson"><svg class="icon icon-linkedin" viewBox="0 0 32 32"><use xlink:href="#icon-linkedin"></use></svg></a>
                <a href="http://github.com/dkanderson"><svg class="icon icon-github" viewBox="0 0 32 32"><use xlink:href="#icon-github"></use></svg></a>
            </nav>
        </div>
    </footer>
    <div id="copy-wrap">
        <div class="container">
            <span class="copy">&copy; Copyright <?php echo the_date('Y'); ?>. Duane K. Anderson.</span>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
