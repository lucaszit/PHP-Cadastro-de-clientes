<!--UTILIZAÇÃO DE VARIAVEL SESSION-->
<?php session_start(); ?>

<!--HEADER DA PÁGINA-->
<?php include_once 'includes/header.inc.php'; ?>
    
    <!--MENU DE NAVEGAÇÃO DA PAGINA-->
    <?php include_once 'includes/menu.inc.php'; ?>

    <!--CONTEÚDO DA PÁGINA-->
    <div class="row container">
        <div class="col s12">
            <h5 class="light">Edição de Registros</h5><hr>
        </div>
    </div>

    <!--FORMULÁRIO DA PÁGINA DE EDIÇÃO DE CLIENTES PREENCHIDO COM OS DADOS DO BANCO-->
    <?php  
        include_once 'banco_de_dados/conexao.php';
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['id'] = $id;
        $querySelect = $link->query("select * from tb_clientes where id='$id'");

        while($registros = $querySelect->fetch_assoc()):
            $nome = $registros['nome'];
            $email = $registros['email'];
            $telefone = $registros['telefone'];
            $cpf = $registros['cpf'];
        endwhile;
    ?>

<div class="row container">
    <!--INICIO DO FORMULÁRIO DE CADASTRO DE CLIENTES-->
    <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="imagens/login-user.png" alt="(imagem)" width="100"></legend>
                <h5 class="light center">Alteração de Clientes</h5>
                <!--CAMPO NOME-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlenght="40" required autofocus>
                    <label for="nome">Nome do Cliente</label>
                </div>
                <!--CAMPO EMAIL-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlenght="50" required>
                    <label for="email">E-mail do Cliente</label>
                </div>
                <!--CAMPO TELEFONE-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlenght="15" required>
                    <label for="telefone">Telefone do Cliente</label>
                </div>
                <!--CAMPO CPF-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf ?>" maxlenght="15" required>
                    <label for="cpf">CPF do Cliente</label>
                </div>
                <!--BOTÕES FORMULÁRIO-->
                <div class="input-field col s12">
                    <input type="submit" value="Alterar" class="btn blue">
                    <a href="consultas.php" class="btn red">Cancelar</a>
                </div>
            </fieldset>
        </form>
</div>

<!--RODAPÉ DA PÁGINA-->
<?php 
    include_once 'includes/footer.inc.php'; 
?>