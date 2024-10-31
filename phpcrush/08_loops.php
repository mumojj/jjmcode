<?php
$x = 'welcome to loops';

echo '<pre>';
echo $x;
echo '</pre>';

for($i=0; $i<5; $i++)
	
{
	echo '<pre>';
	echo 'I am looping';
	echo '</pre>';
	
}

$names =array(
['firstName: '=>'James', 'middleName: '=>'mumo', 'lastName:'=>'Jefwa'],
['firstName: '=>'Jameil', 'middleName: '=>'Malla', 'lastName: '=>'mumo'],
['firstName: '=>'Ethan', 'middleName: '=>'Malla', 'lastName: '=>'mumo'],
['firstName: '=>'Mercy', 'middleName: '=>'lumasha', 'lastName: '=>'mumo']

);



foreach($names as $name){
	
	echo '<pre>';
	print_r($names);
	echo '</pre>';
	
}



?>


<!DOCTYPE html>


<head>
<title></title>
</head>

<body>

</body>

</html>