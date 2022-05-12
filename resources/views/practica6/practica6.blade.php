<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>practica 1</title>
    </head>
    <body>
        <h2>Solicite al usuario dos números</h2>

        <form action="{{route('resultado_pr6')}}" method="post">
            {{ csrf_field() }}
            <label> numero1</label>
            <input type="number" name="numero1" placeholder="numero1">
            <br>
            <label> caracter</label>
            <input type="text" name="caracter"><br>
            <label> numero2</label>
            <input type="number" name="numero2" placeholder="numero2">
            <input type ="submit" name=btn_enviar value="presionar">

        </form>

    </body>
</html>
