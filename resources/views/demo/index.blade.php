<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Hello.LaraVel</h3>

@php
$marks ='80';
@endphp
<h1 style="color : aqua">your mark is {{ $marks }}</h1>

@if($marks < 70)
<h3>you are win</h3>
@elseif($maeks = 80)
<h3>ttp</h3>
@else
<h3>you are lost</h3>
@endif

@php
$day = 'sunday'
@endphp

@switch($day)
@case('saterday')
<h3>Work Day 1</h3>
@break

@case('sunday')
<h3>Work Day 2</h3>
@break

@case('monday')
<h3>Work Day 3</h3>
@break

@default
<h3>Off Day!</h3>
@endswitch

@for($i=1;$i<=10;$i++)
<li><p>Testing For Loop!</p></li>
<ul><h4>Numbers are {{$i}}</h4></ul>
@endfor

@php
$colurs = ['red','yellow','green','black','aqua','blue']
@endphp

<ol>@foreach($colurs as $colur)
<li><h4>{{$colur}}</h4></li>
@endforeach
</ol>

</body>
</html>
