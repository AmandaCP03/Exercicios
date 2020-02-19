<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <?php
        include "inc/menu.inc";
    ?>
        <form action="recebe_agendamento.php" method="POST"> 
            <div class = "row" style="padding-bottom:3px">
                <div class = "col-4 offset-4">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class = "row" style="padding-bottom:3px">
                <div class = "col-4 offset-4">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class = "row" style="padding-bottom:3px">
                <div class = "col-4 offset-4">
                    <input type="tel" name="telefone" placeholder="Telefone">
                </div>
            </div>
            <div class = "row" style="padding-bottom:3px">
                <div class = "col-4 offset-4">
                    <input type="date" name="data">
                </div>
            </div>
            <div class = "row" style="padding-bottom:3px">
                <div class = "col-4 offset-4">
                    <input type="time" name="hora">
                </div>
            </div>
        </form>
    <div class = "row">
        <div class = "col-4 offset-4">
            <button type="button" class="btn btn-outline-dark"> Agendar </button>
        </div>
    </div>
    </div>
</body>
</html>
