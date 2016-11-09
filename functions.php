<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 07.11.16
 * Time: 0:55
 */
// стандартный вывод комментариев
function my_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
<li class="comment" id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-head">
            <div class="comment-author">
                <?php echo get_avatar($comment, $size = '48'); ?>
                Автор: <?php echo get_comment_author_link() ?>
            </div>
            <div class="comment-datepub">
                Дата публікації: <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?>
            </div>
            <div class="comment-msg">
                <?php if ($comment->comment_approved == '0') : ?>
                    Повідомлення: <?php _e('Your comment is awaiting moderation.') ?>
                <?php endif; ?>
            </div>
            <div class="comment-control">
                <?php edit_comment_link(__('Edit'), '  ', '') ?>

                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </div>
        <div class="comment-body">
            <?php comment_text() ?>
        </div>
    </div>
<?php }

?>