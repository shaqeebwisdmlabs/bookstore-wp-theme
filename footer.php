<footer class="bg-neutral-200">
    <div class="footer--container | container padding-block-700 gap">
        <div class="footer__comp-info | gap-lg">
            <a href="#" class="logo | flex">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img src="<?php echo $logo[0] ?>" alt="company-logo" />
                <span class="text-neutral-900 fs-title fw-black"><?php echo get_bloginfo('name'); ?></span>
            </a>
            <?php dynamic_sidebar('comp-info'); ?>
        </div>
        <div class="company-nav | footer__nav gap">
            <p class="fw-bold">Company</p>
            <?php
            wp_nav_menu(array(
                'menu' => 'footer_nav_left',
                'container' => '',
                'theme_location' => 'footer_nav_left',
                'items_wrap' => '<ul class="company__nav-list | gap-sm">%3$s</ul>'
            ))
            ?>
        </div>
        <div class="courses-nav | footer__nav gap">
            <p class="fw-bold">Company</p>
            <?php
            wp_nav_menu(array(
                'menu' => 'footer_nav_center',
                'container' => '',
                'theme_location' => 'footer_nav_center',
                'items_wrap' => '<ul class="company__nav-list | gap-sm">%3$s</ul>'
            ))
            ?>
        </div>
        <div class="support-nav | footer__nav gap">
            <p class="fw-bold">Company</p>
            <?php
            wp_nav_menu(array(
                'menu' => 'footer_nav_right',
                'container' => '',
                'theme_location' => 'footer_nav_right',
                'items_wrap' => '<ul class="company__nav-list | gap-sm">%3$s</ul>'
            ))
            ?>
        </div>
        <div class="contact-info | gap">
            <p class="fw-bold">Contact Info</p>
            <?php dynamic_sidebar('contact-info'); ?>
        </div>
    </div>
    <div class="copyright" style="
          text-align: center;
          padding: 1em 0;
          border-top: 1px solid var(--clr-neutral-700);
        ">
        <span class="fs-body-x-sm text-neutral-700">BookStore All Right Reserved, 2022</span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>