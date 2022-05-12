<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>practica 1</title>
    </head>
    <body>
        <h2>crear la serie de un numero</h2>

        <form action="{{route('resultado_pr1')}}" method="post">
            {{ csrf_field() }}
            <label> numero</label>
            <input type="number" name="numero" placeholder="numero">
            <input type ="submit" name=btn_enviar value="presionar">

        </form>

    </body>
</html>
