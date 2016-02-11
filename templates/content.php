<article class="article">
    <header>
        <h1 class="article__title"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h1>
        <?= get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="article__content">
        <?= the_excerpt(); ?>
    </div>
</article>
