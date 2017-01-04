<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">






<meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
<link type="text/css" rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/style.css"></link>
<link type="text/css" rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/layout.css"></link>
<link type="text/css" rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/sponsor.css"></link>
<link type="text/css" rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/anmeldeformular.css"></link>

<link rel="stylesheet" type="text/css" href="<?php echo(get_template_directory_uri()); ?>/PlugIns/mfglabs-iconset-master/css/mfglabs_iconset.css">
<link type="text/css" rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/menu.css"></link>






<title><?php
    wp_title(); 
    if ( is_front_page() == false){
        echo " - ";
    }
    bloginfo('name');
?></title>

<?php

//if(wp_title()) {print("hallo");}



?>

<!-- For Ping -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<meta name="author" content="<?php the_author() ?>" />


<?php if ( !is_user_logged_in() ) /* Nur laden wenn User nicht eingeloggt ist. */ { ?>
    <!-- Google Tag Manager -->
        <!-- Code to be includet...
    <!-- End Google Tag Manager -->
<?php } ;?>
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>






<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js"></script>
<![endif]-->




<script src="<?php echo(get_template_directory_uri()); ?>/PlugIns/newsletter-ID.js"></script>


<script type="text/javascript">
//CSS Menü auch auf Touchdevices bedienbar machen
$(document).ready( function(){

    $('#menuebutton').click( function(event){
        event.stopPropagation();
        $('#menu-top-menue').toggle();
    });
});

console.log("Wie ist das wetter außerhalb von FuWa so? Wir sind im Schnee gefangen. Hilfe!!!")
</script>





<script type="text/javascript">
    $(document).ready(function(){
        $(window).bind('scroll',function(e){
            parallaxScroll();
        });

        function parallaxScroll(){
            var scrolledY = $(window).scrollTop();

            $('.parallaxScrolling').css('top','-'+((scrolledY*0.4))+'px');
        }
});   
    
</script>    
    

    
    
</head>

<body> 
    <script type="text/javascript" src="<?php echo(get_template_directory_uri()); ?>/PlugIns/flexnav-master/js/jquery.flexnav.min.js"></script>
    <div id="header"> 
        <div id="branding">
            
                
                    <a href="<?php bloginfo('url'); ?>">
                        
                        <a id="PageTitle" href="<?php bloginfo('url'); ?>">
                            <?php bloginfo('name') ?>
                        </a>
                    </a>
                    <h2 id="handwriting"><?php echo(bloginfo('description')); ?></h2>
                
            

            <nav id="headernav">
                <ul id="menueelemente">
                    
                    <div id="menuebutton"><a href="#"><i class="icon-reorder"></i></a></div>

                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>

                    
                    
                </ul>
                
                
                
                
                
            </nav>
         </div> 
    </div>
    
    <div class="parallaxScrolling">
	    <div id="colortransition"></div>
    </div>
