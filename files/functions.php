<?php
function webspeed_person_data() {
    echo '<ul class="contact-con personer">';

    if( get_field('titel') ) {
        echo '<li class="title">' . get_field('titel') . '</li>';
    }

    if( get_field('mobiltelefon') ) {
        echo '<li class="contact-telefon"><span class="contact-label">';
            echo svg_url(1);
           echo '</span><span class="contact-info">';
            echo '<span class="data"><a href="tel:' . str_replace(' ', '',get_field('mobiltelefon')) . '">' . get_field('mobiltelefon') . '</a></span>';
        echo '</span></li>';
    }

    if( get_field('telefon') ) {
         echo '<li class="contact-telefon"><span class="contact-label">';
            echo svg_url(1);
           echo '</span><span class="contact-info">';
            echo '<span class="data"><a href="tel:' . str_replace(' ', '',get_field('telefon')) . '">' . get_field('telefon') . '</a></span>';
        echo '</span></li>';
    }

    if( get_field('email') ) {
        $hh = get_field('email');
        echo '<li class="contact-email"><span class="contact-label">';
           echo svg_url(2);
           echo '</span><span class="contact-info">';
            if( get_field('klik_tekst_email') ) :
                echo '<a href="mailto:' . get_field('email') . '">' . get_field('klik_tekst_email') . '</a>';
            else :
                echo '<a href="mailto:' . get_field('email') . '">' . $hh . '</a>';
            endif;
        echo '</span></li>';
    }
                
    if( get_field('linkedin') ) {
        echo '<li class="contact-linkedin"><span class="contact-label">';
           echo svg_url(6);
           echo '</span><span class="contact-info">';
            echo '<a href="' . get_field('linkedin') . '" target="_blank">Linkedin</a>';
        echo '</span></li>';
    }

    if( get_field('facebook') ) {
        echo '<li class="contact-linkedin"><span class="contact-label">';
           echo svg_url(7);
           echo '</span><span class="contact-info">';
            echo '<a href="' . get_field('facebook') . '" target="_blank">facebook</a>';
            echo '</span></li>';
    }
                
    if( get_field('hjemmeside') ) {
        if (get_field('klik_tekst') ) :
             echo '<li class="contact-www"><span class="contact-label">';
            echo svg_url(4);
           echo '</span><span class="contact-info">';
                echo '<a href="' . get_field('hjemmeside') . '" target="_blank">' . get_field('klik_tekst') . '</a>';
            echo '</span></li>';
        else :
             // Remove http:// and https://
            $clean_url = get_field('hjemmeside');
            $clean_url = preg_replace( "#^[^:/.]*[:/]+#i", "", $clean_url );

                echo '<li class="contact-www"><span class="contact-label">';
            echo svg_url(4);
           echo '</span><span class="contact-info">';
                echo '<a href="' . get_field('hjemmeside') . '" target="_blank">' . $clean_url . '</a>';
            echo '</span></li>';
        endif;
    }

    echo '</ul>';

  
     if ( has_excerpt() ) {
        echo '<div class="person-excerpt small-font">';
            the_excerpt();
        echo '</div>';
     } 

    $content = get_the_content();
    if(!empty($content) && !is_single()) {
        web_read_more();
    }
}

function webspeed_person_img() {
    if ( has_post_thumbnail() ) {
        $content = get_the_content();
            if(!empty($content)) :
                echo '<div class="shortcode-person-img">';
                    echo '<a href="' . get_the_permalink() . '">';
                        the_post_thumbnail('medium');
                    echo '</a>';
                echo '</div>';
            else : 
                echo '<div class="shortcode-person-img">';
                    the_post_thumbnail('medium');
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