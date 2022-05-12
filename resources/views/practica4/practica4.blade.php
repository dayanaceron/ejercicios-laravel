<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>practica 4</title>
</head>

<body>
    <h2>calcular el salario de un empleado</h2>

    <form action="{{ route('resultado_pr4') }}" method="post">
        {{ csrf_field() }}
       <larabel> Horas de trabajo mes:</larabel>
       <input type="number" name="vrl_mes" placeholder="pago por mes"><br>
       <br>
       <larabel> valor por hora:</larabel>
       <input type="number" name="vrl_hora" placeholder="pago por hora"><br>
       <br>
       <larabel> auxilio de transporte:</larabel>
       <input type="number" name="ax_transporte" id=><br>
       <br>
       <larabel> credito:</larabel>
       <input type="number" name="credito"><br>

        <input type="submit" name=btn_enviar value="calcular">

    </form>

</body>

</html>
