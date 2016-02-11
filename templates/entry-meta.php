<div class="article__meta">
    <?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?= get_the_author(); ?></a> –
    <time pubdate itemprop="datePublished" datetime="<?= get_post_time('c', true); ?>" content="<?= get_post_time('c', true); ?>">
        <?= get_the_date(); ?>
    </time>
</div>
