<!--UTILIZAÇÃO DE VARIAVEL SESSION-->
<?php session_start(); ?>

<!--HEADER DA PÁGINA-->
<?php include_once 'includes/header.inc.php'; ?>
    
    <!--MENU DE NAVEGAÇÃO DA PAGINA-->
    <?php include_once 'includes/menu.inc.php'; ?>

    <!--CONTEUDO DA PÁGINA-->
    <div class="row container">
        <p class="&nbsp;"></p>
        <!--INICIO DO FORMULÁRIO DE CADASTRO DE CLIENTES-->
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="imagens/login-user.png" alt="(imagem)" width="100"></legend>
                <h5 class="light center">Cadastro de Clientes</h5>

                <!--MENSAGEM DE CONFIRMAÇÃO PARA CADASTRO DE CLIENTES-->
                <?php 
                   if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                   endif;
                ?>

                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlenght="40" required autofocus>
                    <label for="nome">Nome do Cliente</label>
                </div>
                <!--CAMPO EMAIL-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlenght="50" required>
                    <label for="email">E-mail do Cliente</label>
                </div>
                <!--CAMPO TELEFONE-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlenght="15" required>
                    <label for="telefone">Telefone do Cliente</label>
                </div>
                <!--CAMPO CPF-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="text" name="cpf" id="cpf" maxlenght="15" required>
                    <label for="cpf">CPF do Cliente</label>
                </div>
                <!--BOTÕES FORMULÁRIO-->
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>
    <!--RODAPÉ DA PAGINA-->
    <?php include_once 'includes/footer.inc.php'; ?>