<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kivibe</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="col-8">
                <img src="{{ asset('img/logo3.png') }}" class="img-fluid img-logo" alt="...">
            </div>
        </div>
        <div class="content-tabs">
            <div class="content-tab"><button type="button" class="btn btn-tab">Entrar</button></div>
            <div class="content-tab"><button type="button" class="btn btn-tab">Cadastrar</button></div>    
        </div>
        <div class="sing-in-content">
            <div>
                <button type="button" class="btn btn-dark btn-circle btn-social">
                    <i class="fa fa-google fa-2x"></i>
                </button>
            </div>
            <div>
                <button type="button" class="btn btn-dark btn-circle btn-social">
                    <i class="fa fa-apple fa-2x"></i>
                </button>
            </div>
        </div>
        <div class="form-floating mb-3 mt-5">
            <input type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
            <label for="floatingInput">Endereço de E-mail</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="password" class="form-control" id="floatingInput" placeholder="Digite sua senha">
            <label for="floatingInput">Senha</label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
