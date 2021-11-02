<?php
function webspeed_person_data() {
    echo '<ul class="person-data">';

    if( get_field('titel') ) {
        echo '<li class="title">' . get_field('titel') . '</li>';
    }

    if( get_field('mobiltelefon') ) {
        echo '<li class="cell icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/cell.php';
            echo '<span class="data"><a href="tel:' . str_replace(' ', '',get_field('mobiltelefon')) . '">' . get_field('mobiltelefon') . '</a></span>';
        echo '</li>';
    }

    if( get_field('telefon') ) {
        echo '<li class="phone icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/phone.php';
            echo '<span class="data"><a href="tel:' . str_replace(' ', '',get_field('telefon')) . '">' . get_field('telefon') . '</a></span>';
        echo '</li>';
    }

    if( get_field('email') ) {
        echo '<li class="email icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/mail.php';
            echo '<a href="mailto:' . get_field('email') . '">Email</a>';
        echo '</li>';
    }
                
    if( get_field('linkedin') ) {
        echo '<li class="phone icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/linkedin.php';
            echo '<a href="' . get_field('linkedin') . '" target="_blank">Linkedin</a>';
        echo '</li>';
    }

    if( get_field('facebook') ) {
        echo '<li class="facebook icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/facebook.php';
            echo '<a href="' . get_field('facebook') . '" target="_blank">facebook</a>';
            echo '</li>';
    }
                
    if( get_field('hjemmeside') && get_field('klik_tekst') ) {
        echo '<li class="hjemmeside icon">';
            include WP_CONTENT_DIR . '/plugins/webspeed-personer/icon/www.php';
            echo '<a href="' . get_field('hjemmeside') . '" target="_blank">' . get_field('klik_tekst') . '</a>';
        echo '</li>';
    }

    echo '</ul>';

    $content = get_the_content();
    if(!empty($content) && !is_single()) {
        web_read_more();
    }
    web_edit_link();
}

function webspeed_person_img() {
    if ( has_post_thumbnail() ) {
        $content = get_the_content();
            if(!empty($content)) :
                echo '<div class="shortcode-person-img">';
                    echo '<a href="' . get_the_permalink() . '">';
                        the_post_thumbnail('large');
                    echo '</a>';
                echo '</div>';
            else : 
                echo '<div class="shortcode-person-img">';
                    the_post_thumbnail('large');
                echo '</div>';
        endif;
    }
}

function webspeed_person_titel() {
    $content = get_the_content();
        if(!empty($content)) :
            echo '<h4 class="person-titel"><a href="' . get_the_permalink() . '">';
                the_title();
            echo '</a></h4>';
        else :
            the_title('<h4 class="person-titel">', '</h4>');
        endif ;
}