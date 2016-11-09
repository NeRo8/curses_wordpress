<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 06.11.16
 * Time: 23:58
 */
get_header();
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
    <?php
else:
    global $post;
    foreach (get_categories() as $cat):
        $my_cat = get_cat_ID($cat->name);
        $args = array('category' => $my_cat); ?>
        <div class="category-list">
        <div class="category-title h2">
            <?php echo $cat->name; ?>
        </div>
        <?php
        foreach (get_posts($args) as $post) {
            setup_postdata($post); ?>
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
            wp_reset_postdata();
        }
    endforeach; ?>
    </div>
<?php endif; ?>
<?php
get_footer();
?>