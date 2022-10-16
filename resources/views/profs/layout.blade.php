<!DOCTYPE html>
 
<html>
    <head>
        
        <title>Profs</title>
        <link rel="stylesheet" href="materias/main.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
                <a href="{{route ('profs.index') }}" class="nav-link mx-4" >Professores</a>
              </li>
              <li class="nav-item">
                <a href="{{route ('materias.index') }}" class="nav-link mx-4" >Matérias</a>
              </li>
              <li class="nav-item">
                <a href="{{route ('alunos.index') }}" class="nav-link mx-4" >Alunos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        <br>
        @yield('content')
    </div>
    </body>
</html>