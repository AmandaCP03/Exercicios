<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "inc/menu.inc";
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    $data=$_POST["data"];
    $hora=$_POST["hora"];

    if(!file_exists("agendamento.xml")){
$xml=
'<?xml version="1.0" encoding="UTF-8"?>
<agendamentos>
    <agendamento>
        <nome>'.$nome.'</nome>
        <email>'.$email.'</email>
        <telefone>'.$telefone.'</telefone>
        <data>'.$data.'</data>
        <hora>'.$hora.'</hora>
    </agendamento>
</agendamentos>';
        file_put_contents("agendamento.xml",$xml);
        echo'<h2>Agendamento feito com sucesso</h2>';
    }else{
        $xml=simplexml_load_file("agendamento.xml");
            $agendamento=$xml->addChild("agendamento");
            $agendamento->addChild("nome", $nome);
            $agendamento->addChild("email", $email);
            $agendamento->addChild("telefone", $telefone);
            $agendamento->addChild("data", $data);
            $agendamento->addChild("hora", $hora);
            file_put_contents("agendamento.xml", $xml->asXML());
            echo'<h2>Agendamento realizado com sucesso!</h2>';
    }
?>
</body>
</html>