<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Diaro di bordo:
        Ciao {{$school}} ! oggi sono {{$stato}} perchè fuori il meteo è {{$meteo}}!
    </h1>
   <ul>
    @foreach ($personaggi as $personaggio)
    <li><a href="{{ route ("character", ["index"=>$loop->index])}}">{{$personaggio}}</a></li>
    @endforeach
   </ul>
</body>
</html>