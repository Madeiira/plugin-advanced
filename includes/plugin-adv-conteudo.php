<?php
function padv_plugin_registrando_conteudo($post){
 echo $post."";
 require_once(PADV_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/conteudo.php');
}
add_filter('the_content','padv_plugin_registrando_conteudo');