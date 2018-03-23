<?php
if( get_theme_mod( 'festive-social-email' ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'festive-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'festive' ) . '" class="header-social-icon social-email"><i class="fa fa-envelope-o"></i></a>';
endif;

if( get_theme_mod( 'festive-social-skype' ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'festive-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'festive' ) . '" class="header-social-icon social-skype"><i class="fa fa-skype"></i></a>';
endif;

if( get_theme_mod( 'festive-social-facebook' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'festive' ) . '" class="header-social-icon social-facebook"><i class="fa fa-facebook"></i></a>';
endif;

if( get_theme_mod( 'festive-social-twitter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'festive' ) . '" class="header-social-icon social-twitter"><i class="fa fa-twitter"></i></a>';
endif;

if( get_theme_mod( 'festive-social-pinterest' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'festive' ) . '" class="header-social-icon social-pinterest"><i class="fa fa-pinterest"></i></a>';
endif;

if( get_theme_mod( 'festive-social-etsy' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-etsy' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Etsy', 'festive' ) . '" class="header-social-icon social-etsy"><i class="fa fa-etsy"></i></a>';
endif;

if( get_theme_mod( 'festive-social-medium' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-medium' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Medium', 'festive' ) . '" class="header-social-icon social-medium"><i class="fa fa-medium"></i></a>';
endif;

if( get_theme_mod( 'festive-social-behance' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-behance' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Behance', 'festive' ) . '" class="header-social-icon social-behance"><i class="fa fa-behance"></i></a>';
endif;

if( get_theme_mod( 'festive-social-tumblr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'festive' ) . '" class="header-social-icon social-tumblr"><i class="fa fa-tumblr"></i></a>';
endif;

if( get_theme_mod( 'festive-social-flickr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'festive-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'festive' ) . '" class="header-social-icon social-flickr"><i class="fa fa-flickr"></i></a>';
endif;
