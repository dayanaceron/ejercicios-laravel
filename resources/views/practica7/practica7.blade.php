<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>practica 7</title>
    </head>
    <body>
        <h2>digite el sueldo del empleado</h2>

        <form action="{{route('resultado_pr7')}}" method="post">
            {{ csrf_field() }}
            <label>digite el sueldo del empleado</label>
            <input type="number" name="sueldo" placeholder="00,000,000">
            <br>

            <label> digite una categoria</label>
            <input type="number" name="clase" min="0" max="4"><br>
            <br>

            <input type ="submit" name=btn_enviar value="presionar">

        </form>

    </body>
</html>
