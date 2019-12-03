<?php
$age = "16";
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPpartie2exo1</title>
  </head>
  <body>
    <p>
    <?php
      if ($age >= 18)
      {
        echo 'Vous êtes majeur';
      }else{
        echo 'Vous êtes mineur';
      }
    ?>
    </p>
  </body>
</html>
