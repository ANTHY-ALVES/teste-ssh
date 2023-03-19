<?php
    $dbHost ='localhost';
    $dbUsernome = 'root'
    $dbpassword = '';
    $dbName = 'formulario-de-cadastro-cliente';
    
    $conexao = new mysqli($dbHost,$dbUsernome,$dbpassword, $dbName)

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão Efetuada Com Sucesso";
    }
?>