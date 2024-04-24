<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inturkes Laiptai</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="container">
            <a href="index.php">
                <div class="logo-top">
                    <img src="<?php the_field('logo', 'option') ?>" alt="box">
                </div>
            </a>
            <div class="menu">
            <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
        </div>
        </div>

        <div class="foto">
            <img src="<?php the_field('main_cover_image', 'option') ?>" alt="cover">
        </div>

    </header>