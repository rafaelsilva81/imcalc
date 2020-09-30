  
<?php
/*
* Plugin Name: Calculadora de IMC
* Description: Calcula o seu índice de massa corporal
* Version: 1.0
* Author: DeskCode - Rafael Galdino, Elias Dias, Arclênio Ferreira
* Author URI: https://www.behance.net/deskcode
*/
function registerAssets() {
    /**
     * Registrando os Estilos
     */
    wp_register_style( 'imc-style', plugins_url() . '/imcalc/styles/imc-style.css' );
    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
    wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css');
    wp_register_style('mdb-css', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css');

    /**
     * Registrando os Sripts
     */
    wp_register_script( 'jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    wp_register_script( 'imc-script', plugins_url() . '/imcalc/scripts/imc.js'  );
    wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js' );
    wp_register_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js' );
    wp_register_script( 'mdb-js', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js' );
}

add_action( 'init', 'registerAssets' );

function enqueueAssets() {
    /**
     * Iniciando os estilos
     */
    wp_enqueue_style('imc-style');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('mdb-css');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('googlefonts');

    /**
     * Iniciando os Scripts
     */
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'imc-script');
    wp_enqueue_script( 'popper');
    wp_enqueue_script( 'bootstrap-js');
    wp_enqueue_script( 'mdb-js');

}

add_action( 'wp_enqueue_scripts', 'enqueueAssets' );



function form_IMC_Creation() {
    ob_start();
    include "IMC_plugin.php";
    return ob_get_clean();
  }
  
  add_shortcode("imcalc", "form_IMC_Creation");