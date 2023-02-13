<!DOCTYPE html>
<html>
    <head>
        @base
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0"">
            <h1>Registro Empleados</h1>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Registro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    @section('enlaces')  
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enlace 1</a>
                    </li>
                    @show
                </ul>
            </div>  
        </nav>
        <div class="container my-3" >
            <div class="row">
                <div class="col-sm-3">
                    @yield('lateral')
                </div>
                <div class="col-sm-9">
                    @yield('contenido')
                </div>
            </div>
        </div>
        <div>
            @yield('alerta')
        </div>
        @includeif('footer')
        <script src="@asset('js/bootstrap.bundle.min.js')" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @stack('scripts')
    </body>

</html>

