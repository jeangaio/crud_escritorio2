<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escritório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background: #223e47;">



    <div class="card text-white bg-dark mb-3">
        <div class="card-header text-center">
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="menu" aria-labelledby="offcanvasDarkLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkLabel">Ferramentas do sistema</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="offcanvas-body">
                        <a class="btn btn-light" href="{{ url('/funcionarios') }}">Cadastro de funcionarios</a><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <h3>Bem vindo(a) ao Sistema Escritório</h3>
            <a role="button" data-bs-toggle="offcanvas" class="btn btn-warning" href="#menu">Ferramentas</a>
            <a class="btn btn-secondary" href="{{ url('/logout') }}">Sair</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>