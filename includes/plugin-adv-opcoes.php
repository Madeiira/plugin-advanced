<?php

function padv_pagina_de_opcoes_frontend(){
 
    require_once(PADV_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/op.php');
}


function padv_pagina_de_opcoes_register(){

    add_options_page('PADV opções', 'PADV opções','manage_options', 'padv','padv_pagina_de_opcoes_frontend');

}

add_action('admin_menu','padv_pagina_de_opcoes_register'  );

function padv_carregando_settings_api(){

    register_setting('padv_op','padv_op_icons');

}

add_action('admin_init','padv_carregando_settings_api');