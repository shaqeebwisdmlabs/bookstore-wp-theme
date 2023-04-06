<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Elearn is a global training provider based across the UK that
    specialises in accredited and bespoke training courses. We crush the
    online e-learning platform." />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-neutral-200">
        <div class="header--container | container">
            <a href="/" class="logo | flex">
                <img src="<?php echo bloginfo('template_directory') . "/assets/images" ?>/logo.svg" alt="company-logo" />
                <span class="text-neutral-900 fs-title fw-black"><?php echo get_bloginfo('name'); ?></span>
            </a>
            <button class="nav-toggle" aria-expanded="false">
                <span class="visually-hidden">menu</span>
                <span class="bar"></span>
                <span class="cross"></span>
            </button>
            <nav class="primary-navigation">
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="nav-list">%3$s</ul>'
                ))
                ?>
                <button class="btn | btn--primary">Sign In</button>
            </nav>
        </div>
    </header>