<?php

$valeur1 = $_POST['valeur1'];
$valeur2 = $_POST['valeur2'];
$somme = $valeur1 + $valeur2;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>

<body>

    <?php
    if (isset($_POST['valeur1']) && isset($_POST['valeur2'])) {
        ?>
        <p>
            <?php echo "La somme de vos deux chiffres est " . $somme ?>
        </p>

        <?php
    } else {
        ?>

        <p>
            Vos chiffres n'ont pas été correctement renseigné.
        </p>

        <?php
    }
    ?>

</body>

</html>