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
        <h1>Cadastro de Usuário</h1>
        <a href="<?php echo base_url() . 'home'; ?>">Home</a>
        <?php echo form_open('Usuario/inserir'); ?>
        <input type="text" required name="nomeUsuario" placeholder="Nome Aqui..."/>
        <br><br>
        <input type="text" required name="User" placeholder="Usuário Aqui..."/>
        <br><br>
        <input type="password" required name="senha" placeholder="Senha Aqui..."/>
        <br><br>
        <input type="radio"  name="perfilAcesso" value="Admin"/>Administrador 
        <br><br>
        <input type="radio"  name="perfilAcesso" value="User"/>Usuário
        <br><br>
        <input type="submit" name="acao" value="Salvar"/>
        <input type="reset" value="Limpar"/>
        <?php echo form_close(); ?>
        <h2>Lista Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th><th>User</th><th>Perfil Acesso</th><th>Funções</>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $users): ?>
                    <tr>
                        <td><?php echo $users->nomeUsuario; ?></td>
                        <td><?php echo $users->user; ?></td>
                        <td><?php echo $users->perfilAcesso; ?></td>
                

                <td><a href="<?php echo base_url() . 'Usuario/editar/' . $users->idusuario; ?>">Editar</a> | 
                   <?php if ($users->user != $this->session->userdata('logado')->user) {?>
              <a href="<?php echo base_url() . 
                  'usuario/excluir/' . 
                  $users->idusuario; ?>">Deletar</a>
              <?php } ?>



            </tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php
// put your code here
?>
</body>
</html>
