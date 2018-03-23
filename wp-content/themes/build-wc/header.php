<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Buildup
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
$show_social 	  = get_theme_mod('show_social', false);
$show_slider 	  = get_theme_mod('show_slider', false);
$show_welcomepage = get_theme_mod('show_welcomepage', false);
$show_services 	  = get_theme_mod('show_services', false);

$fb_link 		  = get_theme_mod('fb_link');
$twitt_link 	  = get_theme_mod('twitt_link');
$gplus_link 	  = get_theme_mod('gplus_link');
$linked_link 	  = get_theme_mod('linked_link');
?>

<div id="sitewrapper" <?php if( get_theme_mod( 'box_layout' ) ) { echo 'class="boxlayout"'; } ?>>
<?php 
if( !empty($fb_link) || !empty($twitt_link) || !empty($gplus_link) || !empty($linked_link)) 
{
if( $show_social != '' ){ ?>
<div class="topstrip">
  <div class="container">
     <?php if ( ! dynamic_sidebar( 'header-1' ) ) : ?>            
         <div class="social-icons">                   
                   <?php $fb_link = get_theme_mod('fb_link');
		 				if( !empty($fb_link) ){ ?>
            			<a title="facebook" class="fa fa-facebook" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a>
           		   <?php } ?>
                
                   <?php $twitt_link = get_theme_mod('twitt_link');
					if( !empty($twitt_link) ){ ?>
					<a title="twitter" class="fa fa-twitter" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
          		  <?php } ?>
            
    			  <?php $gplus_link = get_theme_mod('gplus_link');
					if( !empty($gplus_link) ){ ?>
					<a title="google-plus" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url($gplus_link); ?>"></a>
           		  <?php }?>
            
           		  <?php $linked_link = get_theme_mod('linked_link');
					if( !empty($linked_link) ){ ?>
					<a title="linkedin" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
          		  <?php } ?>                  
         </div><!--end .social-icons--> 
     <?php endif; // end sidebar widget area ?>	  
   </div>
 </div><!--end topstrip-->
<?php }} ?> 

<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($show_slider)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="header <?php echo $inner_cls; ?>">
        <div class="container">
            <div class="logo">
            			<?php buildup_the_custom_logo(); ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <span><?php bloginfo('description'); ?></span>
            </div><!-- logo -->
            <div class="columnright">
                <div class="toggle">
                <a class="toggleMenu" href="#"><?php _e('Menu','buildup'); ?></a>
                </div><!-- toggle --> 
                <div class="sitemainmenu">                   
                <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>   
                </div><!--.sitemainmenu -->             
            </div><!-- .headright -->            
            <div class="clear"></div>            
        </div><!-- container -->   
</div><!--.header -->

<?php 
if ( is_front_page() && !is_home() ) {
if($show_slider != '') {
	for($i=7; $i<=9; $i++) {
	  if( get_theme_mod('slide-page'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('slide-page'.$i,true));
	  }
	}
?>                
                
<?php if(!empty($slider_Arr)){ ?>
    <div id="slider" class="nivoSlider">
        <?php 
        $i=1;
        $slidequery = new WP_query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
        while( $slidequery->have_posts() ) : $slidequery->the_post();
        $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
        <?php if(!empty($image)){ ?>
        <img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo $i; ?>" />
        <?php }else{ ?>
        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" />
        <?php } ?>
        <?php $i++; endwhile; ?>
    </div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo $j; ?>" class="nivo-html-caption">
        <div class="slide_info">
            <h2><?php the_title(); ?></h2>
            <p><?php echo esc_html( wp_trim_words( get_the_content(), 20, '' ) );  ?></p>
            <?php
		 $slider_readmore = get_theme_mod('slider_readmore');
		 if( !empty($slider_readmore) ){ ?>
          <a class="slide_more" href="<?php the_permalink(); ?>"><?php echo esc_url($slider_readmore); ?></a>
	  	 <?php } ?>                   
        </div>
    </div>      
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   

<div class="clear"></div>        
<?php } ?>
<?php } } ?>
       
        
<?php 
if ( is_front_page() && ! is_home() ) {
	if( $show_welcomepage != ''){ ?>  
    <section id="welcome-sectiopn">
            	<div class="container">
                    <div class="pageboxwrap">                            
                        <?php if( get_theme_mod('welcomepage',false)) { ?>          
                            <?php $queryvar = new WP_query('page_id='.absint(get_theme_mod('welcomepage',true)) ); ?>				
                                    <?php while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
                                                             
                                      <?php if(has_post_thumbnail() ) { ?>
                                        <div class="welcomepage-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>
                                      <?php } ?>
                                     <div class="welcomepage-content">
                                     <h2 class="sectiontitle"><?php the_title(); ?></h2>                                    
                                     <p><?php echo esc_html( wp_trim_words( get_the_content(), 100, '...' ) );  ?></p>   
                                     <a class="ReadMore" href="<?php the_permalink(); ?>">                                      
                                      <?php _e('Read More','buildup'); ?>
                                    </a>                                                                     
                                    </div>
                                    <?php endwhile;
                                   		 wp_reset_postdata(); ?>                                    
                       				<?php } ?>                                 
                    <div class="clear"></div>  
               </div><!-- pageboxwrap-->            
            </div><!-- container -->
       </section><!-- #welcome-sectiopn -->
<?php } ?>
 
<?php
if( $show_services != ''){ ?>  
    <section id="fourbox-sectiopn">
            	<div class="container">
                    <div class="pageboxarea">                               
                        <?php for($n=10; $n<=13; $n++) { ?>    
                        <?php if( get_theme_mod('pagebxno'.$n,false)) { ?>          
                            <?php $queryvar = new WP_query('page_id='.absint(get_theme_mod('pagebxno'.$n,true)) ); ?>				
                                    <?php while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
                                    <div class="fourboxdiv <?php if($n % 4 == 1) { echo "last_column"; } ?>">                                    
                                      <?php if(has_post_thumbnail() ) { ?>
                                        <div class="fourboxthumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></div>
                                      <?php } ?>
                                     <div class="fourboxcontent">
                                     <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>                                     
                                     <p><?php echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) );  ?></p>
                                    <a class="ReadMore" href="<?php the_permalink(); ?>">                                      
                                     <?php _e('Read More','buildup'); ?>
                                    </a> 
                                     </div>                                   
                                    </div>
                                    <?php endwhile;
                                   		 wp_reset_postdata(); ?>                                    
                       				<?php } } ?>                                 
                    <div class="clear"></div>  
               </div><!-- pageboxwrap-->            
            </div><!-- container -->
       </section>          	      
<?php } ?>
<?php } ?>