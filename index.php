<?php

$par = 'La carbonara si fa con la pancetta';
$badWrd = $_GET['word'];
$char = strlen($par);
$filteredPar = str_replace($badWrd,'***',$par);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova PHP</title>
</head>
<body>
    <h1>La lunghezza è <?php echo $char ?> </h1>
    <h1><?php echo $filteredPar ?></h1>
</body>
</html>