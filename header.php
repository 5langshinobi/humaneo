<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header_component">
        <div class="container-large">
            <div class="header_wrapper">
                
                <div class="header_logo-wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/humaneo.png" alt="Humaneo Logo" class="header_logo">
                    </a>
                </div>

                <nav class="header_menu">
                    <ul class="header_menu-list">
                        <li class="header_menu-item"><a href="#" class="header_menu-link is-active">Accueil</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">Activités en Suisse</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">Activités à l'étranger</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">Nos partenaires</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">Soutenez-nous</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">À propos de nous</a></li>
                        <li class="header_menu-item"><a href="#" class="header_menu-link">Concept éducatif</a></li>
                    </ul>
                </nav>

                <div class="header_button-wrapper">
                    <a href="#" class="button is-header">Faire un don</a>
                </div>

            </div>
        </div>
    </header>