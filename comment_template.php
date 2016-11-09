<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 07.11.16
 * Time: 11:24
 */?>
<div class="comment-create">
            <?php
            #add comments
            $default = array(
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br><textarea id="comment" name="comment" class="comment-form" cols="45" rows="8" aria-required="true" placeholder="Текст сообщения..."></textarea></p>'
            );
            comment_form($default); ?>
</div>

