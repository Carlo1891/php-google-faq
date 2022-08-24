<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQ Google</title>
    </head>

    <!-- Ci sono diverse domande con relative risposte.
    Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
    Note:
    Come discusso a lezione, per parti ancora più composte e/o stilizzazioni particolari, sentitevi libere e liberi di utilizzare il markup all'interno delle stringhe nella struttura dati. -->

    <body>
        <?php
            include 'data.php';
        ?>

        <?php

        foreach ($faq as $value) {
            echo '<h1>'. $value ['question'] . '</h1>';
            echo '<p>'. $value ['answer'] . '</p>';
        }

        ?>
        
    </body>
</html>



