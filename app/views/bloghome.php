<?php get_header() ?>

<div class="container blog-main">
    <div id="loader"></div>

    <div id="header">
        <h2>Renaud Bressand</h2>
        <h3>Designer at Zengularity</h3>
    </div>

<?php full_articles(true) ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part('content'); ?>

<?php endwhile; else : ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<footer class="blog-footer single">

    <?php if (get_previous_posts_link_url()) : ?>

      <a href="<?=get_previous_posts_link_url()?>" class="previous">

        <span class="label">previous</span>

        <p class="title">Page <?= current_page_number() - 1 ?></p>

      </a>

    <?php endif ?>

    <a class="menu" href="/blog">Home</a>

    <?php if (get_next_posts_link_url()) : ?>

      <a href="<?=get_next_posts_link_url()?>" class="next">

        <span class="label">next</span>

        <p class="title">Page <?= current_page_number() + 1 ?></p>

      </a>

    <?php endif ?>

</footer>


<!-- Handle footer -->
<script src="/assets/blog.js"></script>

<?php get_footer() ?>
