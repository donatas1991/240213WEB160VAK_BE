    <?php get_header(); ?>


    <h4>Teikiamos Paslaugos</h4>

    <div class="services">
        <div class="smaller-container">

            <?php if (have_rows('paslaugu_sarasas')) : ?>
                <ul>
                    <?php while (have_rows('paslaugu_sarasas')) : the_row(); ?>
                        <li>
                            <h5><?php the_sub_field('paslaugos_pavadinimas');; ?></h5>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>
    </div>

    <div class="projects">
        <div class="container-second">

            <h2>Projektai</h2>

            <div class="projects-content">
                <ul class="filters">
                    <li class="active"><b>Visi</b></li>
                    <!-- <li>
                        <a target="_blank" href="mediniai_laiptai.php">Mediniai laiptai</a>
                    </li>
                    <li>
                        <a target="_blank" href="pakopos_ant_betono.php">Pakopos ant betono</a>
                    </li>
                    <li>
                        <a target="_blank" href="pakopos_ant_metalo.php">Pakopos ant metalo</a>
                    </li>
                    <li>
                        <a target="_blank" href="kiti_projektai.php">Kiti projektai</a>
                    </li> -->
                    <?php wp_nav_menu([
                    'menu' => 'projects-menu',
                    'container'       => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    ]); ?>
                </ul>

                <?php if (have_rows('projekto_sarasas')) : ?>

                    <div class="project-list">

                        <?php while (have_rows('projekto_sarasas')) : the_row(); ?>

                            <div class="items">
                                <img src="<?php the_sub_field('projekto_foto'); ?>" alt="">
                                <span class="text"><?php the_sub_field('projekto_aprasymas'); ?></span>
                            </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            </div>
        </div>

        <?php get_footer(); ?>