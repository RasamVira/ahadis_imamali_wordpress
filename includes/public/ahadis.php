<?php

/**
 * Registers a JavaScript And stylesheet.
 */
function ahadisimamali_styles() {
    wp_register_style( 'imamali_style', URLIMAMALI.'includes/public/css/style.css');
    wp_enqueue_style( 'imamali_style' );
}
function ahadisimamali_javascript() {
    wp_register_script( 'imamali_style', URLIMAMALI.'includes/public/js/java.js');
    wp_enqueue_script( 'imamali_style' );
}

// Register style and Java.
add_action( 'wp_enqueue_scripts', 'ahadisimamali_styles' );
add_action( 'wp_enqueue_scripts', 'ahadisimamali_javascript' );

//Hadis List
function ahadis_imam_ali_func(){
    ?>
    <?php
        echo '<div class="ahadis">';
        echo '<div id="imam"> حضرت امیر المومنین علی(ع) : </div>';
        echo '<script type="text/javascript">';
        echo 'document.write(ahadis_mola_ali[i]);';
        echo '</script>';
        echo '</div>';
    ?>
    <?php
}
    ?>