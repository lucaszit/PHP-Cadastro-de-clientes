<!--MONTAGEM DA TABELA COM DADOS DE CLIENTES CADASTRADOS NO BANCO-->
<?php 
    include_once 'conexao.php';
    $querySelect = $link->query("select * from tb_clientes");

    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $nome = $registros['nome'];
        $email = $registros['email'];
        $telefone = $registros['telefone'];
        $cpf = $registros['cpf'];

        echo "<tr>";
            echo "<td>$nome</td><td>$email</td><td>$telefone</td><td>$cpf</td>";
            echo "<td><a href='editar.php?id=$id'><i class='material-icons '>edit</i></a></td>";
            echo "<td><a href='banco_de_dados/delete.php?id=$id' onclick='deletar()'><i class='material-icons'>delete</i></a></td>";
        echo "</tr>";

    endwhile;
?>
<script>
    function deletar(){
        window.alert("Cliente deletado com Sucesso!");
    }
</script>