<?php
    include ('header-grayscale.php');
?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <?php if( get_theme_mod( 'grayscale_logo') ) : ?>
                <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
                'rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'grayscale_logo' ) ); ?>
                'alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                </div>
                <?php else: ?>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>
            <?php endif; ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'grayscale_navigation', // menu slug from step 1
                        'menu' => 'ul',
                        'menu_class' => 'nav navbar-nav scroll', // <ul class="nav navbar-nav"> 
                        'container' => 'li', // 'li' container will be added
                    ));
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <?php
        echo '<header class="intro" style="';  
        if( get_theme_mod( 'grayscale_top') ) :
            echo 'background-image: url(';
            echo esc_url( get_theme_mod( 'grayscale_top' ) );
            echo ');">';
        else:
            echo '">';
        endif;    
    ?>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <?php if ( is_active_sidebar( 'grayscale_intro_section' ) ) : ?>
                            <?php dynamic_sidebar( 'grayscale_intro_section' ); ?>
                        <!-- #intro-widget -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <?php if ( is_active_sidebar( 'grayscale_about_section' ) ) : ?>
                    <?php dynamic_sidebar( 'grayscale_about_section' ); ?>
                <!-- #intro-widget -->
            <?php endif; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <?php if ( is_active_sidebar( 'grayscale_contact_section' ) ) : ?>
                    <?php dynamic_sidebar( 'grayscale_contact_section' ); ?>
                <!-- #intro-widget -->
            <?php endif; ?>
        </div>
    </section>

    <!-- Download SASS Section -->
    <section id="download" class="content-section text-center">
        <?php
            echo '<div class="download-section" style="';
            if( get_theme_mod( 'grayscale_download') ) :
                echo 'background-image: url(';
                echo esc_url( get_theme_mod( 'grayscale_download' ) );
                echo ');">';
            else:
                echo '">';
            endif; 
        ?>
            <div class="container">
                <?php if ( is_active_sidebar( 'grayscale_cta_section' ) ) : ?>
                        <?php dynamic_sidebar( 'grayscale_cta_section' ); ?>
                    <!-- #intro-widget -->
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="final" class="container content-section text-center">
        <div class="row">
            <?php if ( is_active_sidebar( 'grayscale_last_section' ) ) : ?>
                    <?php dynamic_sidebar( 'grayscale_last_section' ); ?>
                <!-- #intro-widget -->
            <?php endif; ?>
        </div>
    </section>

    <?php if ( is_active_sidebar( 'grayscale_map_section' ) ) : ?>
            <?php dynamic_sidebar( 'grayscale_map_section' ); ?>
        <!-- #intro-widget -->
    <?php endif; ?>


<?php
include ('footer-grayscale.php');
?>
