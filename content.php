<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 06.11.16
 * Time: 23:58
 */

if (have_posts()):
    while (have_posts()): the_post(); ?>
        <div class="articles">
            <div class="article-title">
                <a href="<?php the_permalink(); ?>" class="h1">
                    <?php echo wp_trim_words(get_the_title(), 50); ?>
                </a>
                <p>Кількість коментарів: <?php comments_popup_link(0, 1, '%') ?></p>
                <div class="tags">
                    <?php the_tags('Теги: ', ', ') ?>
                </div>
            </div>
            <div class="article-content">
                <?php echo wp_trim_words(get_the_content(), 250); ?>
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
    endwhile;
endif;
?>
