<?php get_header(); ?>

<h4>Galerija</h4>

<?php

if (have_posts()) : while (have_posts()) : the_post();

        $images = get_field('galerija');

        if ($images) : ?>
            <div class="gallery">
                <?php foreach ($images as $image) : ?>
                    <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_attr($image['alt']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <p><?php echo esc_html($image['caption']); ?></p>
                <?php endforeach; ?>
            </div>
<?php

        endif;
    endwhile;
endif;

?>


<?php get_footer(); ?>