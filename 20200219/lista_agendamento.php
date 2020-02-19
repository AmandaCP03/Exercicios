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
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data</th>
                <th scope="col">hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(file_exists("agendamento.xml")){
                    $xml = simplexml_load_file("agendamento.xml");
                    foreach($xml->children() as $agendamento){
                        echo "<tr>
                                <td scope=\"row\">$agendamento->nome</td>
                                <td scope=\"row\">$agendamento->email</td>
                                <td scope=\"row\">$agendamento->telefone</td>
                                <td scope=\"row\">$agendamento->data</td>
                                <td scope=\"row\">$agendamento->hora</td>
                            </tr>";
                    }
                }else{
                    echo "<h2>Nenhum agendamento realizado</h2>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>