<?php

// Creiamo una variabile con un paragrafo di testo a scelta.
// Stampiamo a schermo il paragrafo e la sua lunghezza.
// Passiamo sulla barra del browser in query string una parola che vogliamo censurare
// Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
// Stampiamo di nuovo il paragrafo e la sua nuova lunghezza.

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel officia natus nesciunt obcaecati inventore, sed quidem asperiores libero fugit magni ullam? Tempore mollitia unde molestias, necessitatibus ab ratione dicta delectus!';

// echo $paragraph;
// echo strlen($paragraph);

$badword = $_GET['badword'];

$censured_bad_word = str_replace($badword, '***', $paragraph)

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
    <p><?=  $paragraph ?></p>
    <p><?= mb_strlen($paragraph) ?></p>
    <hr>
    <p><?=  $censured_bad_word ?></p>
    <p><?= mb_strlen($censured_bad_word ) ?></p>
</body>
</html>