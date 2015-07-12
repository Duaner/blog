
<div class="blog-post" <?= the_wio_attributes() ?>>

    <?php the_category(', ') ?>

    <h2 class="blog-post-title">

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="description">
         <?php single_post_shortlede(); ?>
        </p>

    </h2>

    <p class="blog-post-meta">

        <?= the_date_link() ?>

        <?php the_tags('', ', ') ?>

    </p>

    <img class="first_image"src="<?= post_thumbnail_url(); ?>" />
    <?php the_content() ?>

</div>
