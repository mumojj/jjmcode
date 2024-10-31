<?php

$blogs = [

['Title'=>'Dtribe', 'Author'=>'Esther', 'likes'=>30],
['Title'=>'Tarakilishi', 'Author'=>'James', 'liles'=>50],
['Title'=>'Mavazi', 'Author'=>'Eileen', 'likes'=>100]

];

$vehicles = [

['japan: '=>'Toyota', 'japan2'=>'Nissan','japan3'=>'Subaru'],
['germany'=>'Mercedes', 'germany2'=>'Volkswagen', 'germany3'=>'Audi'],
['china'=>'Sino Truck', 'china2'=>'Sayong Muso', 'china3'=>'Dong Feng']

];




echo '<pre>';
print_r($blogs);
echo'</pre>';

echo '<pre>';
print_r($vehicles);
echo '</pre>';

echo '<pre>';
print_r ($vehicles[0]);
echo '</pre>';

echo '<pre>';
print_r ($blogs[1]);
echo '</pre>';

echo '<pre>';
print_r ($vehicles[1]['germany2']);
echo'</pre>'




?>


<!DOCTYPE html>
<head>
<title></title>
</head>

<body>

</body>

</html>