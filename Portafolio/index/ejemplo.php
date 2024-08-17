<?php
$paises= array (
    'Peru', 'Chile','Colombia' , 'Chile', 'chile'
);
$alejandro =array('telefono' => 955954634, 'edad' => 15, 'pais' =>'Peru');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    foreach($alejandro as $dato => $valor){
         echo '<li>' . $dato .' : '.$valor. '</li>';
    }

    ?>
    
</body>
</html>