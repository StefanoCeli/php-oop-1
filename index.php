<?php 
require_once __DIR__ . "/classes/Movie.php";

$movie1 = new Movie ("Venerdi 13");
//$movie1->title = "Venerdi 13";
$movie1->genre = "Horror";
$movie1->rating = "7/10";

$movie2 = new Movie ("Army of dead");
//$movie2->title = "Army of dead";
$movie2->genre = "Zombie/action";
$movie2->rating = "6/10";

$movie3 = new Movie ("Jojo Rabbit");
//$movie3->title = "Jojo Rabbit";
$movie3->genre = "Commedia, ‎Drammatico‎, ‎Guerra";
$movie3->rating = "8/10";

$movie4 = new Movie ("Soul");
//$movie4->title = "Soul";
$movie4->genre = "Animazione, commedia, drammatico, avventura";
$movie4->rating = "10/10";

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
    
    <h1> <?php echo $movie1->getInfoMovie() ?> </h1>
    <h1> <?php echo $movie2->getInfoMovie() ?> </h1>
    <h1> <?php echo $movie3->getInfoMovie() ?> </h1>
    <h1> <?php echo $movie4->getInfoMovie() ?> </h1>
    <h2>i film sono: <?php echo Movie::getMovieCount() ?></h2>

</body>
</html>