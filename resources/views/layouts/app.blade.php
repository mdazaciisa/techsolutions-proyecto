<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>

    <div class="banner" style="background-image: url('/img/banner.jpg'); background-size: cover; background-position: center; height: 150px;">
        <div class="d-flex h-100 justify-content-center align-items-center text-white">
            <h1>Tech Solutions</h1>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container justify-content-center">
            <!-- Botón hamburguesa -->
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavegacion" aria-controls="menuNavegacion" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú colapsable -->
            <div class="collapse navbar-collapse justify-content-center" id="menuNavegacion">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/listar">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/agregar">Agregar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/buscar">Buscar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mx-5">
        @yield('content')
    </div>
    <footer class="p-3 bg-dark text-center text-light">Tech Solutions. Todos los derechos reservados</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>