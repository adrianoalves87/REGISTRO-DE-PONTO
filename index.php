<?php
session_start(); // Iniciar a sessao
// Definir um fuso horario padrao
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Registro de Ponto</title>
    <link rel="stylesheet" href="./css">
 
</head>

<body>
    <section>
        <div class="form-container">
            <div class="inputbox">
               
                <h1>Registro de Ponto</h1>
            </div>

            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

            <div class="inputbox">
                <img src="pausa-cafe" alt="Ícone de Relógio">
                <h2 id="horario"><?php echo date("d/m/Y H:i:s"); ?></h2>
            </div>

            <div class="register">
                <button><a href="registrar_ponto.php">Registrar</a><br></button>
            </div>

            <script>
                function atualizarHorario() {
                    var data = new Date().toLocaleString("pt-br", {
                        timeZone: "America/Sao_Paulo"
                    });
                    document.getElementById("horario").innerHTML = data.replace(", ", " - ");
                }

                setInterval(atualizarHorario, 1000);
            </script>
        </div>
    </section>
</body>

</html>
