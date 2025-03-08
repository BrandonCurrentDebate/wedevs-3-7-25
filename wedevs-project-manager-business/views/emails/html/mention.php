<?php

$tpbk = config('frontend.assets_url') .'images/tpbk.png';

?>

<div style="width:600px; background: #fff;">
    <div style="width: 100%;">
        <div style="height: auto; width: 100%;">
            <div style="font-family: 'Lato', sans-serif; color: #333; font-size: 16px; padding-top: 20px; text-align: center; padding: 0 40px;">
                <?php
                    _e('Hello, ', 'pm-pro');
                    // echo ' <strong>' . esc_html($user) . '</strong>. ';
                    _e('You are mentioned in a comment by', 'pm-pro');
                    echo ' <strong>' . esc_html($creator) . '</strong>. ';
                    _e('Please click the link below to view the comment.', 'pm-pro');
                ?>
            </div>
            <div style="font-family: 'Lato', sans-serif; color: #333; font-size: 16px; padding-top: 20px; text-align: center; padding: 0 40px;">
                <?php echo esc_html($content); ?>
            </div>
            <div style="padding: 18px; margin: 30px auto 45px; border-radius: 30px; background: #00b1e7; width: 171px; text-align: center;">
                <a href="<?php echo esc_url($comment_link); ?>" style="font-family: Lato, sans-serif; font-size: 16px; text-decoration: none; color: #fff;">
                    <?php _e('View Comment', 'pm-pro'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

