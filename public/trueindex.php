<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-danger bg-light ">
    <div class="container my-4">
      <a href="trueindex.php" class="navbar-brand"><h1 class="laravelred">Laravel Project</h1></a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link mx-4" >Professores</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link mx-4" target="_blank">Matérias</a>
          </li>
          <li class="nav-item">
            <a href="alunos" class="nav-link mx-4" >Alunos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

       <main class="my-4">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
                <p class = "title mt-5">O que é o projeto Laravel?</p>
                <p class="subtexto mt-4">O projeto laravel é um sistema web que apresenta um CRUD de Alunos, Professores e Matérias,com a possibilidade
                    de relacionar um professor com uma matéria e n alunos com uma matéria
                </p>
                <p class="subtexto">Esse sistema web foi feito utilizando uma API laravel e MYSQL com a front-end estruturada com o framework bootstrap </p>

            </div>
            <div class="col-7">
                <img src="images/image_test.jpg" alt="guy programming in laravel image" class="img-fluid" image>

            </div>
          </div>
        </div>
       </main>

        <section class=" p-5 text-center my-4">
            <div class="container">
              <div class="d-sm-flex">
                <div class="text-center">
                    <p class = "title my-4">Como Utilizar?</p>
                    <p class="subtexto my2"> Para realizar o CRUD basta clickar na barra de navegação acima ou nos botões abaixo
                    </p>
            
    
    
                </div>
              </div>
            </div>
    


    


    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>