<?php
/*
Plugin Name: Plugins adv
Plugin URI: 
Description: Foco em aprendizado adv
Version: 2.0
Author: Gabriel Madeira
Author URI: https://github.com/Madeiira
Text Domain: hW

*/
//Security
if(!defined('ABSPATH')){
    exit("Acesso Negado");
}

//DEFINIÇÃO DE CONSTANTE DE DIRETORIO ABOSULUTO
define('PADV_DIRETORIO_ABSOLUTO_DO_PLUGIN',plugin_dir_path(__FILE__));

// INCLUDES

require_once(PADV_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/plugin-adv-conteudo.php');
require_once(PADV_DIRETORIO_ABSOLUTO_DO_PLUGIN.'/includes/plugin-adv-opcoes.php');


?>