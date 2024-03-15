<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moumen Silk</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');

                    if ($logo_url) {
                        echo '<a href="' . esc_url(home_url('/')) . '" rel="home">';
                        echo '<img src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '" height="70">';
                        echo '</a>';

                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <nav id="site-navigation" class="main-navigation">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenuLocation',
                            ));
                            ?>
                        </nav>
                    </div>

                    <div class="d-flex">
                        <div id="div_block-23-18">
                            <img src="/wp-content/themes/moumensilk/img/Vector.png" class="vector" alt="">
                        </div>

                        <form role="search">
                            <a class="book-a-call-button button">Book a Call</a>
                        </form>

                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <p>Try scrolling the rest of the page to see this option in action.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>