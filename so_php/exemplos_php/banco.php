<?php
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'Ruan_m_vieira';
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
           if (mysqli_connect_errno($conexao)) {
            echo "Problemas para conectar no banco. Verifique os dados informados.";
            die();
           }

?>