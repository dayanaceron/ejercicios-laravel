<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>usted digito el numero: {{$numero1}}</h1>
    {{$a=1;}}

    @while ($a < $numero1)
    {{$a+=1;}}

     @endwhile



</body>
</html>
