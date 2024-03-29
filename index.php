<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Employee Registration</title>
    <!-- Link para o arquivo style.css -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php" style=" color: white;">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios.php" style=" color: white;">Registered Members</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container">
        <div class="row">    
          <div class="titulo">
           <h1> Employee Registration </h1>
        </div>
            <div class="col-lg-12">
                <form action="salvar.php" method="POST">
                    <input type="hidden" name="acao" value="cadastrar">
                    <!-- agrupamento dos rótulos e controles do formulário --> 
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" name="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>CPF*</label>
                        <input type="text" name="cpf" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Birthday*</label>
                        <input type="date" name="data_nascimento" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>RG*</label>
                        <input type="text" name="rg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Issuing Body*</label>
                        <input type="text" name="orgao_emissor" class="form-control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Send</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
