<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro de ponto funcionarios</title>
<link rel="stylesheet" href="./css.css">
</head>
<body>
  <section>
<form>
<div class="inputbox">
 <ion-ion nome=""></ion-ion>
 <h1>Registro de ponto</h1>

</div>
<div class="inputbox">
 <ion-ion nome=""></ion-ion>
 <h2 id="horario"><?php echo date("d/m/Y H:i:s"); ?></h2>

</div>
<button><a href="registrar_ponto.php">Registrar</a><br></button>
<div class="register">

</div>
</form>
</section> 

<script>
        //var apHorario = document.getElementById("horario");

        function atualizarHorario() {
            var data = new Date().toLocaleString("pt-br", {
                timeZone: "America/Sao_Paulo"
            });
            //var formatarData = data.replace(", ", " - ");
            //apHorario.innerHTML = formatarData; 
            document.getElementById("horario").innerHTML = data.replace(", ", " - ");
        }

        setInterval(atualizarHorario, 1000);
    </script>
</body>
</html>