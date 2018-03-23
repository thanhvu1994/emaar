<?php
function maxbusiness_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'maxbusiness_excerpt_more');

function maxbusiness_comment_form_fields($fields) {

    $fields['author'] = '<div class="form-group col-md-4"><label  for="name">' . __('NAME', 'maxbusiness') . ':</label><input type="text" class="form-control" id="name" name="author" placeholder="' . esc_attr__('Full Name', 'maxbusiness') . '"></div>';
    $fields['email']  = '<div class="form-group col-md-4"><label for="email">' . __('EMAIL', 'maxbusiness') . ':</label><input type="email" class="form-control" id="email" name="email" placeholder="' . esc_attr__('Your Email Address', 'maxbusiness') . '"></div>';
    $fields['url']    = '<div class="form-group col-md-4"><label  for="url">' . __('WEBSITE', 'maxbusiness') . ':</label><input type="text" class="form-control" id="url" name="url" placeholder="' . esc_attr__('Website', 'maxbusiness') . '"></div>';
    return $fields;
}
add_filter('comment_form_fields', 'maxbusiness_comment_form_fields');

function maxbusiness_comment_form_defaults($defaults) {
    $defaults['submit_field']   = '<div class="form-group col-md-4">%1$s %2$s</div>';
    $defaults['comment_field']  = '<div class="form-group col-md-12"><label  for="message">' . __('COMMENT', 'maxbusiness') . ':</label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="' . esc_attr__('Message', 'maxbusiness') . '"></textarea></div>';
    $defaults['title_reply_to'] = __('Post Your Reply Here To %s', 'maxbusiness');
    $defaults['class_submit']   = 'btn btn-theme';
    $defaults['label_submit']   = __('SUBMIT COMMENT', 'maxbusiness');
    $defaults['title_reply']    = '<h2>' . __('Post Your Comment Here', 'maxbusiness') . '</h2>';
    $defaults['role_form']      = 'form';
    return $defaults;

}
add_filter('comment_form_defaults', 'maxbusiness_comment_form_defaults');

function maxbusiness_comment( $comment, $args, $depth ){
    global $comment_data;
    //translations
    $leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] :__('Reply','maxbusiness'); ?>
    <div class="col-xs-12 comment-detail">
        <div class="col-xs-2 comments-pics">
        <?php echo get_avatar($comment,$size = '80'); ?>
        </div>
        <div class="col-xs-10 comments-text">
            <h3>
                <?php comment_author();?> 
                <span> 
                    <?php 
                        if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
                    <?php comment_date('F j, Y');?>
                    <?php else : ?>
                    <?php comment_date(); ?>
                    <?php endif; ?>
                    <?php _e('at','maxbusiness');?>&nbsp;<?php comment_time('g:i a'); ?>
                 </span>
             </h3>  
             <p><?php comment_text() ; ?></p>
            <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            <?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'maxbusiness' ); ?></em>
            <br/>
            <?php endif; ?>
        </div>
    </div>                              
    <?php
}

function maxbusiness_is_woocommerce_activated() {
    return class_exists( 'woocommerce' ) ? true : false;
}

function maxbusiness_font_awesome_icon_array(){
    return array("fa fa-glass","fa fa-music","fa fa-search","fa fa-envelope-o","fa fa-heart","fa fa-star","fa fa-star-o","fa fa-user","fa fa-film","fa fa-th-large","fa fa-th","fa fa-th-list","fa fa-check","fa fa-close","fa fa-search-plus","fa fa-search-minus","fa fa-power-off","fa fa-signal","fa fa-cog","fa fa-trash-o","fa fa-home","fa fa-file-o","fa fa-clock-o","fa fa-road","fa fa-download","fa fa-arrow-circle-o-down","fa fa-arrow-circle-o-up","fa fa-inbox","fa fa-play-circle-o","fa fa-repeat","fa fa-refresh","fa fa-list-alt","fa fa-lock","fa fa-flag","fa fa-headphones","fa fa-volume-off","fa fa-volume-down","fa fa-volume-up","fa fa-qrcode","fa fa-barcode","fa fa-tag","fa fa-tags","fa fa-book","fa fa-bookmark","fa fa-print","fa fa-camera","fa fa-font","fa fa-bold","fa fa-italic","fa fa-text-height","fa fa-text-width","fa fa-align-left","fa fa-align-center","fa fa-align-right","fa fa-align-justify","fa fa-list","fa fa-dedent","fa fa-indent","fa fa-video-camera","fa fa-photo","fa fa-pencil","fa fa-map-marker","fa fa-adjust","fa fa-tint","fa fa-edit","fa fa-pencil-square-o","fa fa-share-square-o","fa fa-check-square-o","fa fa-arrows","fa fa-step-backward","fa fa-fast-backward","fa fa-backward","fa fa-play","fa fa-pause","fa fa-stop","fa fa-forward","fa fa-fast-forward","fa fa-step-forward","fa fa-eject","fa fa-chevron-left","fa fa-chevron-right","fa fa-plus-circle","fa fa-minus-circle","fa fa-times-circle","fa fa-check-circle","fa fa-question-circle","fa fa-info-circle","fa fa-crosshairs","fa fa-times-circle-o","fa fa-check-circle-o","fa fa-ban","fa fa-arrow-left","fa fa-arrow-right","fa fa-arrow-up","fa fa-arrow-down","fa fa-share","fa fa-expand","fa fa-compress","fa fa-plus","fa fa-minus","fa fa-asterisk","fa fa-exclamation-circle","fa fa-gift","fa fa-leaf","fa fa-fire","fa fa-eye","fa fa-eye-slash","fa fa-warning","fa fa-exclamation-triangle","fa fa-plane","fa fa-calendar","fa fa-random","fa fa-comment","fa fa-magnet","fa fa-chevron-up","fa fa-chevron-down","fa fa-retweet","fa fa-shopping-cart","fa fa-folder","fa fa-folder-open","fa fa-arrows-v","fa fa-arrows-h","fa fa-bar-chart-o","fa fa-bar-chart","fa fa-twitter-square","fa fa-facebook-square","fa fa-camera-retro","fa fa-key","fa fa-gears","fa fa-comments","fa fa-thumbs-o-up","fa fa-thumbs-o-down","fa fa-star-half","fa fa-heart-o","fa fa-sign-out","fa fa-linkedin-square","fa fa-thumb-tack","fa fa-external-link","fa fa-sign-in","fa fa-trophy","fa fa-github-square","fa fa-upload","fa fa-lemon-o","fa fa-phone","fa fa-square-o","fa fa-bookmark-o","fa fa-phone-square","fa fa-twitter","fa fa-facebook","fa fa-github","fa fa-unlock","fa fa-credit-card","fa fa-rss","fa fa-hdd-o","fa fa-bullhorn","fa fa-bell","fa fa-certificate","fa fa-hand-o-right","fa fa-hand-o-left","fa fa-hand-o-up","fa fa-hand-o-down","fa fa-arrow-circle-left","fa fa-arrow-circle-right","fa fa-arrow-circle-up","fa fa-arrow-circle-down","fa fa-globe","fa fa-wrench","fa fa-tasks","fa fa-filter","fa fa-briefcase","fa fa-arrows-alt","fa fa-group","fa fa-link","fa fa-cloud","fa fa-flask","fa fa-cut","fa fa-copy","fa fa-paperclip","fa fa-save","fa fa-square","fa fa-bars","fa fa-list-ul","fa fa-list-ol","fa fa-strikethrough","fa fa-underline","fa fa-table","fa fa-magic","fa fa-truck","fa fa-pinterest","fa fa-pinterest-square","fa fa-google-plus-square","fa fa-google-plus","fa fa-money","fa fa-caret-down","fa fa-caret-up","fa fa-caret-left","fa fa-caret-right","fa fa-columns","fa fa-sort","fa fa-linkedin","fa fa-undo","fa fa-legal","fa fa-dashboard","fa fa-comment-o","fa fa-comments-o","fa fa-flash","fa fa-sitemap","fa fa-umbrella","fa fa-paste","fa fa-lightbulb-o","fa fa-exchange","fa fa-cloud-download","fa fa-cloud-upload","fa fa-user-md","fa fa-stethoscope","fa fa-suitcase","fa fa-bell-o","fa fa-coffee","fa fa-cutlery","fa fa-file-text-o","fa fa-building-o","fa fa-hospital-o","fa fa-ambulance","fa fa-medkit","fa fa-fighter-jet","fa fa-beer","fa fa-h-square","fa fa-plus-square","fa fa-angle-double-left","fa fa-angle-double-right","fa fa-angle-double-up","fa fa-angle-double-down");
}

?>