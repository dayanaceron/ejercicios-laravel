<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>practica 1</title>
    </head>
    <body>
        <h2>Numero factorial</h2>

        <form action="{{route('resultado_pr2')}}" method="post">
            {{ csrf_field() }}
            <label> digite en numero para la serie</label>
            <input type="number" name="numero1" placeholder="Un solo numero!!">
            <input type ="submit" name=btn_enviar value="presionar">

        </form>

    </body>
</html>
