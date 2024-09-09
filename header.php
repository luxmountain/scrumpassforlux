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
                <img src="https://blog.playstation.com/content/themes/playstation-2018/images/sonylogo-2x.jpg" alt="playstation.com" class="sony-logo">
            </div>
            <div class="page-banner">
                <img src="https://blog.playstation.com/tachyon/2024/09/2aa135a5b978b5c9ed1df9af967f88339dc22962.png?resize=1900%2C470&zoom=1" alt="banner" class="banner">
            </div>
        </div>
    </div>

    <header id="masthead" class="site-header sticky">
        <nav id="site-navigation" class="navigation__primary above-fold" aria-label="Main menu">
            <div class="logo-menu-wrap">
                <div class="site-logo-link">
                    <a class="playstation-logo">
                        <svg class="icon icon--brand-ps icon--white" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                        <path d="M1.5 15.51c-1.58-.44-1.84-1.37-1.12-1.9.66-.49 1.8-.86 1.8-.86l4.67-1.66v1.89l-3.36 1.2c-.59.21-.69.51-.2.67.48.16 1.36.11 1.95-.1l1.61-.58v1.69c-.1.02-.22.04-.32.05-1.62.27-3.34.16-5.03-.4zm9.85.2l5.24-1.87c.6-.21.69-.51.2-.67-.48-.16-1.36-.11-1.95.1l-3.49 1.23v-1.96l.2-.07s1.01-.36 2.43-.51c1.42-.16 3.16.02 4.52.54 1.54.49 1.71 1.2 1.32 1.69-.39.49-1.35.84-1.35.84l-7.12 2.56v-1.88zm.62-12.1c2.76.95 3.69 2.13 3.69 4.78 0 2.59-1.6 3.57-3.63 2.59V6.16c0-.57-.1-1.09-.64-1.23-.41-.13-.66.25-.66.81v12.08l-3.26-1.03V2.38c1.39.26 3.41.86 4.5 1.23zm7.25 13.1c0 .04-.01.07-.03.08-.02.02-.06.02-.1.02h-.21v-.21h.22c.03 0 .05 0 .07.01.04.03.05.06.05.1zm.15.48c-.01 0-.02-.02-.02-.03 0-.01-.01-.03-.01-.06V17c0-.05-.01-.08-.03-.1l-.04-.04c.02-.02.04-.03.06-.05.02-.03.03-.07.03-.11 0-.09-.04-.15-.11-.18a.29.29 0 0 0-.14-.03H18.76v.75h.14v-.31h.2c.04 0 .06 0 .08.01.03.01.04.04.04.08l.01.12c0 .03 0 .05.01.06 0 .01.01.02.01.03v.01h.15v-.04l-.03-.01zm-.88-.31c0-.15.06-.29.16-.39a.552.552 0 0 1 .94.39.552.552 0 1 1-.94.39.513.513 0 0 1-.16-.39zm.55.67c.18 0 .35-.07.47-.2a.65.65 0 0 0 0-.94.641.641 0 0 0-.47-.19c-.37 0-.67.3-.67.67 0 .18.07.34.2.47.13.12.29.19.47.19z" fill-rule="evenodd" class="icon-primary-color"></path>	</svg>
                    </a>
                    <span class ="blog-title">
                        PlayStation<span class="highlight-blog">.Blog</span>
                    </span>
                </div>
    
                <div class="region-menu-wrap flex" style="padding-top:5px;">
                    <div class="primary-menu-container">
                        <ul id="primary-menu" class="header__nav">
                            <li id="menu-item-222415" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-222415"><a href="https://blog.playstation.com/category/ps5/">PS5</a></li>
                            <li id="menu-item-378451" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-378451"><a href="https://blog.playstation.com/category/playstation-vr2/">PS VR2</a></li>
                            <li id="menu-item-207892" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-207892"><a href="https://blog.playstation.com/category/ps4/">PS4</a></li>
                            <li id="menu-item-207886" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-207886"><a href="https://blog.playstation.com/category/ps-store/">PS Store</a></li>
                            <li id="menu-item-207964" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-207964"><a href="https://blog.playstation.com/category/ps-plus/">PS Plus</a></li>
                        </ul>		
                    </div>
                    
                            
                    <div class="site-header__region-selector-wrap" style="padding-left: 20px; font-weight:400;">
                        <button class="site-header__region-select region-select" aria-expanded="false">
                            <span class="region-name">English</span>
                    
                            <svg class="icon icon--caret-down down-arrow icon-arrow-down icon--16 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                            <title></title><path fill-rule="evenodd" class="icon-primary-color" d="M0 5.8l1.83-1.79L10 12.34l8.17-8.33L20 5.8 10 15.99z"></path>	</svg>
                        </button>
                    
                        
                        <div class="site-header__region-selector-dropdown region-selector-dropdown">
                            <ul class="site-header__region-selector-link-list region-selector-link-list">
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.fr.playstation.com/" class="region-link">French</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.de.playstation.com/" class="region-link">German</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.it.playstation.com/" class="region-link">Italian</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.ja.playstation.com/" class="region-link">Japanese</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.ko.playstation.com/" class="region-link">Korean</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.br.playstation.com/" class="region-link">Portuguese (Br)</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.ru.playstation.com/" class="region-link">Russian</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.latam.playstation.com/" class="region-link">Spanish (LatAm)</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.es.playstation.com/" class="region-link">Spanish (EU)</a>			</li>
                                <li class="site-header__region-selector-list-item region-selector-list-item">
                                    <a href="https://blog.zh-hant.playstation.com/" class="region-link">Traditional Chinese</a>			</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login-search-wrap">
                <div class="dark-mode">
                    <div class="dark-mode__message">
                        <p class="dark-mode__message--text" aria-live="polite"></p>
                    </div>
                    <button class="dark-mode__toggle with-tooltip" type="button" aria-label="Switch to dark mode">
                        <svg class="icon icon--lightbulb icon--26 icon--" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                        <title></title><path d="M6.3 17.12h7.32v-1.35H6.3v1.35zm0 1.69c0 .66.54 1.19 1.2 1.19h4.93c.66 0 1.19-.53 1.19-1.19v-.25H6.3v.25zM17.55 7.59c0 2.29-1.44 5.07-3.6 6.74H5.98c-2.16-1.67-3.6-4.45-3.6-6.74C2.37 3.4 5.77 0 9.97 0c4.19 0 7.58 3.4 7.58 7.59z" fill-rule="evenodd" class="icon-primary-color"></path>	</svg>
                    </button>
                </div>
                <span id="js-login-link">
                    <a href="https://ca.account.sony.com/api/authz/v3/oauth/authorize?client_id=0399155d-250c-47ab-b77a-228dcafea40d&amp;response_type=code&amp;scope=openid+id_token%3Apsn.basic_claims+user%3AbasicProfile.get+kamaji%3Auser.subscriptions.get&amp;redirect_uri=https%3A%2F%2Fblog.playstation.com%2Fwp-admin%2Fadmin-ajax.php%3Faction%3Dhandle_login%26return_to%3Dhttps%253A%252F%252Fblog.playstation.com%252F%2523login&amp;service_entity=urn:service-entity:psn" class="login-link">
                        Login		
                    </a>
                </span>
                <button class="nav-button-search" aria-expanded="false">
                    <svg class="icon icon--search icon--26 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                    <title></title><path d="M7.43 12.54c-2.82-.01-5.11-2.29-5.11-5.11 0-2.82 2.29-5.11 5.11-5.11 2.82.01 5.11 2.29 5.11 5.11a5.126 5.126 0 0 1-5.11 5.11zm6.39-1.34c.65-1.11 1.03-2.4 1.03-3.78 0-4.1-3.32-7.42-7.42-7.43A7.437 7.437 0 0 0 0 7.43c0 4.1 3.32 7.42 7.42 7.43 1.38 0 2.67-.38 3.78-1.03L17.38 20 20 17.38l-6.18-6.18z" fill-rule="evenodd" class="icon-primary-color"></path>	</svg>
                </button>
            </div>
        </nav>
    </header>