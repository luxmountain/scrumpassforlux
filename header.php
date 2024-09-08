<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="/wp-content/themes/scrumforpredev/assets/images/logo.png"> 
    
    <?php 
        wp_head();
    ?>

</head> 

<body>
    <!-- Side Menu-->
    <!-- <header class="header text-center">	    
	    
        <a class="site-title pt-lg-4 mb-0" href="index.html">Side Menu</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

            <?php 
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >			
				
                <?php 
                    wp_nav_menu(
                        array(
                            'menu'=> 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap'=> '<ul id = "" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>',
                        )
                    );
                ?>

				<hr>

			</div>
        </nav>
        <?php
            dynamic_sidebar('sidebar-1');
        ?>
    </header> -->
    <div class="pre-header">
	    <div class="page-title text-center">
            <div class="sony-banner">
                <a href="https://www.playstation.com"><img src="https://blog.playstation.com/content/themes/playstation-2018/images/sonylogo-2x.jpg" alt="playstation.com" class="sony-logo"></a>
            </div>
            <div class="page-banner">
                <img src="https://blog.playstation.com/tachyon/2024/09/2aa135a5b978b5c9ed1df9af967f88339dc22962.png?resize=1900%2C470&zoom=1" alt="banner" class="banner">
            </div>
        </div>