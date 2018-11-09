<html>
<head>
    <title>
       @yield('titulo')
    </title>
    <!-- La siguiente linea es para utilizar BootStrap -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
          crossorigin="anonymous">
</head>

<body>
<nav class = "navbar navbar-default navbar-fixed-top navbar-dark bg-secondary" role="navigation" >
    <div class =text-left>
        <a href="/recetas" class = "navbar-text bg-faded" style="margin-left: 10px;">RECETAS</a>
        <a href="/juegos" method = 'GET' class = "navbar-text bg-faded" style="margin-left: 10px;">JUEGOS </a>
    </div>



</nav>

<div class="row">

    @yield('contenido')
</div>
</body>

</html>