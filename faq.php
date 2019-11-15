<!DOCTYPE html>
<?php include_once("./php/faq_functions.php")?>
<?php include_once("./php/parts.php") ?>
<?php $tittle="F.A.Q. - Preguntas frecuentes"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <link rel="stylesheet" href="css/faq_syles.css">
    <title><?php echo $tittle;?></title>
  </head>
  <body>
    <?php header_of($tittle) ?>
    <?php add_question($cases); ?>
    <?php footer_of(); ?>
  </body>
</html>
