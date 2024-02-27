<?php
$nav = ['Homepage','About us','Contact us'];
$linkNav=['home','about','contact'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Primi Passi</title>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav>
                <ul class="d-flex justify-content-center p-4 list-unstyled">
                <?php
                foreach ($nav as $key => $elem) {
                ?>
                    <li class="m-3">
                        <a class="text-decoration-none text-dark" href="{{ route($linkNav[$key])}}">
                            <?php
                            echo $elem;
                            ?>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </header>

        <main>
            <h1 class="text-center">
                Contact us
            </h1>
        </main>
    </body>
</html>