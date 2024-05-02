<?php 

/*inclusione della classe Movie */
require_once __DIR__ . '/models/Movie.php';

/* dichiarazione di due istanze di Movie */
$fantozzi = new Movie('Fantozzi', 1975, 'Comedy', 100, 4.0);
$potemkin = new Movie('La corazzata Potëmkin', 1925, 'Historical', 75, 4.4);

var_dump($fantozzi);
var_dump($potemkin);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OOP - 1 </title>
</head>

<body>
    
<div>
    <h3><?php $fantozzi->getFullInfo() ?></h3>
</div>

<div>
    <h3><?php $potemkin->getFullInfo() ?></h3>
</div>

</body>

</html>