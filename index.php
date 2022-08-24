<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQ Google</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <!-- Ci sono diverse domande con relative risposte.
    Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.
    Note:
    Come discusso a lezione, per parti ancora più composte e/o stilizzazioni particolari, sentitevi libere e liberi di utilizzare il markup all'interno delle stringhe nella struttura dati. -->

    <body>
        <header>
            <div class="top-bar d-flex">

                <figure class="mx-2">Logo Google</figure>
                <h4>Privacy e Termini</h4>

            </div>

            <nav>
                <ul>
                    <li>Introduzione</li>
                    <li>Norme sulla privacy</li>
                    <li>Termini di servizio</li>
                    <li>Tecnologie</li>
                    <li>Domande Frequenti</li>
                </ul>
            </nav>

            <hr>
        </header>
        
        <main>
            <?php
                include 'data.php';
            ?>

            <div class="container">
                <?php

                    foreach ($faq as $value) {
                        echo '<h3>'. $value ['question'] . '</h3>';
                        echo '<p>'. $value ['answer'] . '</p>';
                    }

                ?>
            </div>
        </main>
        
        <footer>
            <div class="bottom-bar container">
                <nav>

                    <ul></ul>

                </nav>
                
                <div>

                </div>
            </div>
        </footer>
        
    </body>
</html>



