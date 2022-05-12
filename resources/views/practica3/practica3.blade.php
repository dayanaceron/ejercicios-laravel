<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>practica 3</title>
</head>

<body>
    <h2>calcular el promedio de notas</h2>

    <form action="{{ route('resultado_pr3') }}" method="post">
        {{ csrf_field() }}
        {{-- <label> dijite en mumero para promedio de notas</label>
            $definitiva = ($nota1 + $nota2 + $nota3) /3; --}}
        <p>nota1:<input type="tex" name="nota1" /></p>
        <p>nota2:<input type="tex" name="nota2" /></p>
        <p>nota3:<input type="tex" name="nota3" /></p>

        <input type="submit" name=btn_enviar value="presionar">

    </form>

</body>

</html>
