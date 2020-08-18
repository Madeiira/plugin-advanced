<?php
    
    $padv_opcoes=get_option('padv_op_icons');
 //print_r($padv_opcoes); //mostrando arrays
    
?>

<div class='wrap'> <!-- class do proprio wp !-->
    


    <form action="options.php" method="POST"> <!-- options api para modificação ser salva // sempre metodo post !-->
    
        <?php settings_fields( 'padv_op' ); // direcionando o grupo // tudo a beixo vai ser relacionado aos blocos do grupo?> 
        
        <label> Facebook</label> </br>
        <input type='url' name="padv_op_icons[fb_perfil]" id="padv_op_icons[fb_perfil]" value="<?php echo $padv_opcoes['fb_perfil']; ?>"> </br>
        <!-- Esconder<input type='checkbox' name="padv_op_icons[fb_hide]" id="padv_op_icons[fb_hide]" value="1" <?php //checked( 1, $padv_opcoes['fb_hide']); ?> > </br> !-->

        <label> Twitter</label> </br>
        <input type='url' name="padv_op_icons[tt_perfil]" id="padv_op_icons[tt_perfil]" value="<?php echo $padv_opcoes['tt_perfil']; ?>"> </br>
        <!-- Esconder<input type='checkbox' name="padv_op_icons[tt_hide]" id="pue=adv_op_icons[tt_hide]" val"1" <?php// checked( 1, $padv_opcoes['tt_hide']); ?> > </br> !-->

        <label> Instagram</label> </br>
        <input type='url' name="padv_op_icons[ig_perfil]" id="padv_op_icons[ig_perfil]" value="<?php echo $padv_opcoes['ig_perfil']; ?>"> </br>
        <!-- Esconder<input type='checkbox' name="padv_op_icons[ig_hide]" id="padv_op_icons[ig_hide]" value="1" <?php //checked( 1, $padv_opcoes['ig_hide']); ?>  ></br> !-->

        <input type="submit" name="submit" value="Salvar">
    
    </form>



</div>
