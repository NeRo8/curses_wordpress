<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 07.11.16
 * Time: 0:09
 */
get_header();
?>

<?php
if (have_posts()):
    while (have_posts()): the_post(); ?>
        <div class="articles">
            <div class="article-title">
                <a href="<?php the_permalink(); ?>" class="h1"><?php the_title(); ?></a>
                Кількість коментарів: <?php comments_popup_link(0, 1, '%') ?>
                <div class="tags">
                    <?php the_tags('Теги: ', ', ') ?>
                </div>
            </div>
            <div class="article-content">
                <?php the_content(); ?>
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
        comments_template();
    endwhile;
endif;
get_footer();
?>