<?php

$name = ['James','David','Mark'];

echo $name[1].'<br>';

print_r ($name).'<br>';

$name2 = array('Jimmy', 'esther');

echo $name[0].'<br>';

print_r($name2).'<br>';

$numbers = [24,50,80,100];

echo $numbers[3].'<br>';

$numbers[3]=85;

echo $numbers[3].'<br>';

print_r($numbers).'<br>';

$puffgirls = ['puff1'=>'Jane', 'puff2'=>'Antonina','puff3'=>'Mercy'];

print_r($puffgirls).'<br>';

echo $puffgirls['puff2'].'<br>';

$puffgirls['puff2'] = 'Jahenda';

echo $puffgirls['puff2'].'<br>';

$boys = array('boy1'=>'Brian','Boy2'=>'Patrick','boy3'=>'Edwin');

$boys['boys4'] = 'Eric';

print_r($boys).'<br>';

print_r($boys).'<br>';

$total = array_merge($puffgirls, $boys);

print_r($total).'<br>';



?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

</body>

</html>
