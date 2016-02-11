<?php while (have_posts()) : the_post(); ?>

    <article class="article">
        <header>
            <h1 class="article__title"><?= the_title(); ?></h1>
            <?= get_template_part('templates/entry-meta'); ?>
        </header>

        <div class="article__content">
            <?= the_content(); ?>
        </div>

    </article>

    <?php comments_template('/templates/comments.php'); ?>

<?php endwhile; ?>
