<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>practica 0</title>
    </head>
    <body>
        <h2>dos numeros enteros</h2>


        <form action="{{ route('resultado_pr0') }}" method="post">
            {{ csrf_field() }}
            {{-- <label> dijite en mumero para promedio de notas</label>
                $definitiva = ($nota1 + $nota2 + $nota3) /3; --}}
            <label>Digite el primer numero</label>
            <input type="number" name="num1">
            <label>Digite el segundo numero</label>
            <input type="number" name="num2">

            <input type="submit" name=btn_enviar value="presionar">



        </form>

    </body>
</html>
