<?php get_header(); ?>
<!-- 本体部分をmainで囲むのはMaterializeの作法 -->
<main>
    <div class="container">
        <!-- 投稿されているかのチェック -->
        <? if (have_posts()) : ?>
            <!-- 投稿の数だけループ -->
            <? while (have_posts()) : the_post() ?>
                <h2>
                    <!-- 記事のタイトルをリンクで表示 -->
                    <a href="<?=get_permalink()?>"><? the_title(); ?></a>
                </h2>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- サイトのHOMEへのリンク -->
        <a href="<?= home_url(); ?>">HOME</a>
    </div>
</main>
<?php get_footer(); ?>