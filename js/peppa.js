/**
 * Created by nero on 09.11.16.
 */
jQuery(document).ready(function ($) {
    $('#send').click(function () {
            $.ajax({
                type: "GET",
                url: "/wordpress/wp-admin/admin-ajax.php",
                dataType: 'html',
                success: function (data) {
                    $('.container').html("Hello");
                }
            });
        }
    );
});