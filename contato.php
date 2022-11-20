<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato | Tomorrow Corporation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <div id="content">
    <nav class="navbar navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="image/logo-mini.png">ㅤTomorrow Corporation</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="empresa.php">Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <div class="container">
        <center><img src="image/TCorporation.png"  width="350" height="350">
    </div>
    <br><br>
   <form name="form1" id="form1" method="post" action="mensagem.php">
  <div class="col-6 col-sm-3 container text-center">
    <label for="exampleInputEmail1" class="form-label">Digite seu login</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
    
  </div>
  <div class="col-6 col-sm-3 container text-center">
    <label for="exampleInputPassword1" class="form-label">Digite seu nome</label>
    <input type="text" class="form-control" name="nome" id="nome" required>
  </div><BR>
  <button type="submit" name="enviar" id="enviar" class="btn btn-primary d-grid gap-2  mx-auto">ENVIAR</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>