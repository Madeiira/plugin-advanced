<?php
    
    $padv_opcoes=get_option('padv_op_icons');
  //  print_r($padv_opcoes);  mostrando arrays
    
?>
<?php // if(!$padv_opcoes['fb_hide'] or !$padv_opcoes['tt_hide'] or !$padv_opcoes['ig_hide']): ?>

<style>

  .padv-conteudo .padv-icones img{

   
  width: 40px;
  height: auto;
  padding: 8px;
 

}

</style>
<div class = "padv-conteudo">
    Me encontre nas redes sociais:
    <hr>
        <div class="padv-icones">
        
        <?php// if(!$padv_opcoes['ig_hide']): ?>
        <a href="<?php echo $padv_opcoes['ig_perfil']; ?>"> <img src="<?php echo plugin_dir_url(__FILE__).'img/ig.png'?>"> </a>
        <?php// endif; ?>
        
        <?php// if(!$padv_opcoes['tt_hide']): ?>
        <a href="<?php echo $padv_opcoes['tt_perfil']; ?>"> <img src="<?php echo plugin_dir_url(__FILE__).'img/tt.png'?>"> </a>
        <?php// endif; ?>
        
        <?php// if(!$padv_opcoes['fb_hide']): ?>
        <a href="<?php echo $padv_opcoes['fb_perfil']; ?>"> <img src="<?php echo plugin_dir_url(__FILE__).'img/fb.png'?>"> </a>
        <?php// endif; ?>
        </div>
    </hr>
</div>
        <?php // endif; ?>