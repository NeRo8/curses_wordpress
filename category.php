<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 06.11.16
 * Time: 23:58
 */
get_header();
wp_title('Категорії');
?>

<?php if (have_posts()): ?>
    <div class="category-list">
        <div class="category-title h2">
            <?php single_cat_title(); ?>
        </div>
        <?php while (have_posts()): the_post(); ?>
            <div class="grp-articles">
                <div class="article-title">
                    <a href="<?php the_permalink(); ?>" class="h1">
                        <?php echo wp_trim_words(get_the_title(), 2); ?>
                    </a>
                    <p>Кількість коментарів: <?php comments_popup_link(0, 1, '%') ?></p>
                    <div class="tags">
                        <?php the_tags('Теги: ', ', ') ?>
                    </div>
                </div>
                <div class="article-content">
                    <?php echo wp_trim_words(get_the_content(), 60); ?>
                </div>
                <hr>
                <div class="article-footer">
                    <div class="article-author">
                        Автор: <?php the_author(); ?>
                    </div>
                    <div class="article-datepub">
                        Дата публікації: <?php the_date(); ?>
                    </div>
                </div>
            </div>
            <?php
        endwhile; ?>
    </div>
<?php endif;

get_footer();
?>