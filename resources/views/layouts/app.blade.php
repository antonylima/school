<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body{
    background-color: lightgreen;
    /*background-image: url('../img/school2.jpg');*/
}
    .voltar{
    position: absolute;
    left: 20px;
    }

    .sair{
    position: absolute;
    right: 20px;
    }
    .lb{
        font-weight: bold;
    }

    .mybtn{
        font-weight:bold;
    }
    </style>
    

</head>
<body>
@yield('content')
</body>
</html>