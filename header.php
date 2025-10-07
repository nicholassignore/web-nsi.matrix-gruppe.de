<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="header-container">
        <div class="header-logo">
            <p><a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
        </div>
        <nav class="main-navigation">
            <ul class="nav-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Kontact</a></li>
            </ul>

        </nav>
    </div>
</header>