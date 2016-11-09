<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 07.11.16
 * Time: 0:47
 */

if (comments_open()) {
    if (get_comments_number() == 0) { ?>
        <h3>Коментарі відсутні.</h3><?php comment_form();
    } else {
        comment_form(); ?>
        <h3>Коментарі, для статті: "<?php the_title(); ?>"</h3>
        <div class="comment-list">
            <?php
            $args = array(
                'avatar_size' => 64, // размер аватара 64*64px, по умолчанию 32
                'reply_text' => 'Ответить', // текст ответа на комментарий
                'callback' => 'my_comments' // функция формирования внешнего вида комментария
            );
            wp_list_comments($args); ?>
        </div>
    <?php }
} else { ?>
    <h3>Коментарі відключені</h3>
<?php }
?>