<!--HEADER DA PÁGINA-->
<?php include_once 'includes/header.inc.php'; ?>

    <!--MENU DE NAVEGAÇÃO DA PAGINA-->
    <?php include_once 'includes/menu.inc.php'; ?>

        <!--CONTEÚDO DA PÁGINA-->
        <div class="row container">
            <div class="col s12">
                <h5 class="light">Consultas</h5><hr>
                <!--CABEÇALHO DA TABELA PARA EXIBIR OS DADOS DO BANCO-->
                <table class="striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--CRIAÇÃO DA TABELA CONTENDO OS DADOS PRESENTES NO BANCO DE DADOS-->
                        <?php include_once 'banco_de_dados/read.php'; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    <!--RODAPÉ DA PAGINA-->
    <?php include_once 'includes/footer.inc.php'; ?>