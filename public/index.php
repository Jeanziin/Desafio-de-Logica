<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
  $params = session_get_cookie_params();
  setcookie(
    session_name(),
    '',
    time() - 42000,
    $params["path"],
    $params["domain"],
    $params["secure"],
    $params["httponly"]
  );
}

session_destroy();

include_once "teste.php";


if (isset($_POST["num"])) {
  $num = $_POST["num"];
}

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teste</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="../public/css/style_index.css">


</head>

<body>

  <section class="Page">
    <div class="container">
      <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
          <form method="POST" action="index.php" id="Conjectura_Goldbach">

            <div class="form-group">
              <Label for="">
                <h4>Digite um Número
              </Label>
              <input type="number" id="num" name="num" class="justify-content" id="Conjectura" placeholder="Conjectura de Golbach"></input>
              <button id="sweetalert" type="submit" class="btn btn-dark">Enviar</button>
              <script>
                function alert() {
                  swal.fire('Conjectura de Goldbach', 'Todo inteiro par maior ou igual a 4 é a soma de dois números primos!', 'sucess');
                }
                alert();
              </script>
              <div class="alert alert-success">
                <?php
                if ((int)$num % 2 == 0 && $num >= 4) {
                  echo  Desafio_Conjectura_Goldbach($num);
                } else {
                  echo "Insira um Número Par maior ou igual a 4!";
                }
                ?>
              </div>
              <div class="direita">
                <img src="../public/images/math.png" alt="imagem">
                <div class="sombra"></div>
              </div>
            </div>
        </div>
      </div>
      </form>
    </div>
    <div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </section>
</body>

</html>