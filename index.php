<?php

/*
  Plugin name: IMC plugin
  Description: Esse é um plugin para cálculo de IMC
  version: 1.0
  Author: Desk Code
  License: GPLv2 or later

*/


function form_IMC_Creation() {
  ob_start();
  include "IMC_plugin.php";
  return ob_get_clean();
}

add_shortcode("Calculadora_IMC", "form_IMC_Creation");


?>
