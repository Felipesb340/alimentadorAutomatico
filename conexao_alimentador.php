<?php 
    try{
        $HOST ="localhost";
        //define o nome do banco a ser conectado.
        $BANCO ="alimentador";
        $USUARIO ="root";
        $SENHA = "";

        $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset-utf8", $USUARIO, $SENHA);
        $conexao = mysqli_connect($HOST, $USUARIO, $SENHA, $BANCO);
    } catch (PDOExeception $erro){

        //echo "Erro de conexão, detalhes: " . $erro->getMessage();
        echo "conexão_erro";
    }
?>  