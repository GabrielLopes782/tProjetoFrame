
        <h1>Cadastro de Pessoa</h1>
        <?php echo form_open('Pessoa/inserir'); ?>
        <input class="form-control" type="text" required name="nome" placeholder="Nome Aqui..."/>
        <br><br>
        <input class="form-control" type="text" required name="telefone" placeholder="Telefone Aqui..."/>
        <br><br>
        <input class="form-control" type="email" required name="email" placeholder="Email Aqui..."/>
        <br><br>
        <input class="form-control" type="text" required name="endereco" placeholder="Endereço Aqui..."/>
        <br><br>
         <input  type="radio" required name="tpPessoa" value="Física"/>Física 
        <br><br>
        <input  type="radio" required name="tpPessoa" value="Júridica"/>Jurídica
        <br><br>
        <input class="form-control" type="text"  name="cpf" placeholder="CPF Aqui..."/>
        <br><br>
        <input type="radio"  name="sexo" value="F"/>Feminino 
        <br><br>
        <input type="radio"  name="sexo" value="M"/>Masculino
        <br><br>
        <input class="form-control" type="text"  name="cnpj" placeholder="CNPJ Aqui..."/>
        <br><br>
        <input class="form-control" type="text"  name="nomeFantasia" placeholder="Nome Fantasia Aqui..."/>
        <br><br>
        <input class="btn-outline-success" type="submit" name="acao" value="Salvar"/>
        <input class="btn-outline-danger" type="reset" value="Limpar"/>
        <?php echo form_close(); ?>
        <h2>Lista Pessoas</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th><th>Telefone</th><th>E-mail</th><th>Funções</>


                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pes): ?>
                    <tr>
                        <td><?php echo $pes->nome; ?></td>
                        <td><?php echo $pes->telefone; ?></td>
                        <td><?php echo $pes->email; ?></td>
                

                <td><a href="<?php echo base_url() . 'pessoa/editar/' . $pes->idPessoa; ?>">Editar</a> | 
                    <a href="<?php echo base_url() .
                'pessoa/excluir/' . $pes->idPessoa;
                    ?>">Deletar</a></td>
               
            </tr>
<?php endforeach; ?>
    </tbody>
</table>

