<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CarVision - Registro Veículo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="icon_aba.ico" type="image/x-icon">
<style>

  body {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #3F2350;  
  }
  
  .logo-background{
    position: relative;
    left: -150px;
  }

  .container-box {
    width: 370px;
    height: 575px;
    background-color: white;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    position: absolute;
    right: 94px; 
    top: 50%;
    transform: translateY(-50%);
  }

  .logo{
    margin-top: 74px;
    margin-bottom: 30px;
    width: 135px;
    height: auto;
    line-height: normal;
    text-align: center;
  }

  p{
    margin-left: -65px;
    margin-bottom: -5px;

  }

  .input-box {
    width: 100%;
    max-width: 179px;
    height: 50px;
    margin-top: 5px;
    margin-bottom: 10px;
    padding: 10px;
    border: 2px solid #3F2350;
    border-radius: 5px;
    transition: border-color 0.3s;
  }

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    appearance: none;
    margin: 0; 
  }
  
  .input-box:hover {
    border-color: #3F2350;
  }

  .btn-registrar {
    margin-top: 20px;
    color: white;
    background-color: #3F2350;
    border-color: #3F2350;
    border-radius: 20px;
    width: 179px;
    height: 45px;;
  }

  .btn-voltar {
    width: 100%;
    max-width: 179px;
    color: #3F2350;
    background-color: white;
    border-radius: 20px;
  }

  .btn-registrar:hover{
    background-color: white;
    color: #3F2350;
    border-color: #3F2350;
  }
  .btn-voltar:hover {
    background-color: #3F2350;
  }

  .or-box {
    width: 100%;
    max-width: 179px;
    height: 16px;
    text-align: center;
    background-color: white;
    color: #3F2350;
    margin: 10px 0;
    margin-bottom: 10px;
  }


  .diagonal{
    width: 0;
    height: 0;
    margin-bottom: 0px;
    border-left: 100vw solid transparent;
    border-bottom: 90vw solid #ccc;
    bottom: 0px;
    z-index: -1;
    position: fixed;
  }
</style>
</head>
<body>
  <div class="diagonal"></div>  
  <div>
    <img class="logo-background" src="icon_background.png">
  </div>
  <section>
  <div class="container-box">
    <div>
      <img class="logo" src="icon_txt.png">
    </div>
    <p>Registro Veículo</p>
    <?php
    if (isset($_POST['modelo']) && isset($_POST['ano']) && isset($_POST['placa']) && isset($_POST['cor'])) {
        $modelo = $_POST['modelo'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];
        $cor = $_POST['cor'];
    ?>
    <h1>Informações Recebidas</h1>
    <p><strong>modelo:</strong> <?php echo $modelo; ?></p>
    <p><strong>Data de Validade:</strong> <?php echo $mes; ?>/<?php echo $ano; ?></p>

    <h2></h2>
    <form action="processar_formulario.php" method="post">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" placeholder="Modelo"><br><br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" placeholder="Ano"><br><br>

        <label for="placa">Placa</label>
        <input type="text" id="placa" name="placa" placeholder="Placa"><br><br>

        <label for="cor">Cor</label>
        <input type="text" id="cor" name="cor" placeholder="Cor"><br><br>


      <button class="btn btn-primary btn-registrar">Registrar</button><br><br>
      <button class="btn btn-secondary btn-voltar">Voltar</button>
    </form>
    <?php
    } else {
        echo "<p>Nenhum dado foi enviado ainda.</p>";
    }
    ?>

    </div>
  </div>
  </section>
</body>
</html>