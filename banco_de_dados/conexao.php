<!--CONEXÃO COM O BANCO DE DADOS-->
<?php
    $utf8 = header("content-type: text/html; charset=utf-8");
    $link = new mysqli('localhost', 'root', '', 'db_cadastro');
    $link->set_charset('utf-8');
?>