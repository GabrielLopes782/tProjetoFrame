<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'Usuario'; ?>">Voltar</a>
        <h1>Editar Pessoa</h1>
        <?php echo form_open('Usuario/atualizar'); ?>
        <input type="hidden" required name="idusuario" value="<?php echo $Usuario[0]->idusuario; ?>" />
        <input type="text" required name="nomeUsuario" value="<?php echo $Usuario[0]->nomeUsuario; ?>" />
        <br><br>
        <input type="text" required name="user" value="<?php echo $Usuario[0]->user; ?>" />
        <br><br>
        <input type="radio"  name="perfilAcesso" value="Admin" <?php if($Usuario[0]->perfilAcesso=='Admin'){echo 'checked';} ?>/>Administrador 
        <br><br>
        <input type="radio"  name="perfilAcesso" value="User"  <?php if($Usuario[0]->perfilAcesso=='User'){echo 'checked';} ?>/>Usuário
        <br><br>
        <input type="submit" value="Salvar"/>
        <?php echo form_close(); ?>

    </body>
</html>
