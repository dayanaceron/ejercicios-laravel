<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>usted digito el numero: {{$numero1}}</h3>
    @if($numero1 < 20)
    {{$factorial=1;}}
    @for ($i = 1; $i <=$numero1; $i++)

           {{$factorial=$factorial*$i}}
           <br>
    @endfor
    {{$factorial}}
    @else
    {{ "numero no valido", $numero1;}}
    @endif
    <h4>el factorial: {{$factorial}}</h4>

</body>
</html>
