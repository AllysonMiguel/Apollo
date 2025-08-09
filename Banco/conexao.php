<?php
    $hostname = "br612.hostgator.com.br";
    $usuario = "hubsap45_usrapollo";
    $senha = "MT%~cavalokU2";
    $bancoDeDados = "hubsap45_bd_apollo";
    

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancoDeDados);
    
    if ( $mysqli -> connect_errno){
        echo"Erro";
    }

?>