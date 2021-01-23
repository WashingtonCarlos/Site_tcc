<a href="{{URL::previous()}}">Voltar</a>
<br>
<br>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <title>Visualizar Usuario</title>
</head>

<body>
    <div class="container theme-showcase" role="main">
        <div class="row">
        @foreach ($usua as $uss)
            <div class="col-md-12">
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ID:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->id }}
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    CPF:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->cpf}}
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    NOME:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->nome }} 
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    E-MAIL:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->email }} 
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    ENDEREÇO:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->endereco }} 
                </div>
                <div class="col-xs-3 col-sm-1 col-md-1">
                    TELEFONE:
                </div>
                <div class="col-xs-9 col-sm-11 col-md-11">
                    {{ $uss->telefone }} 
                </div>
            </div>
            @endforeach;
        </div>
    </div>
</body>

</html>