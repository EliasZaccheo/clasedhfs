<!DOCTYPE html>
<?php include_once("./php/faq_functions.php")?>
<?php include_once("./php/parts.php") ?>
<?php $tittle="F.A.Q. - Preguntas frecuentes"; ?>
<html lang="es" dir="ltr">
  <head>
    <?php head_of() ?>
    <link rel="stylesheet" href="css/faq_styles.css">
    <title><?php echo $tittle;?></title>
  </head>
  <body >
    <?php header_of($tittle) ?>
    <main class="container">
      <section class="FAQ">
        <?php add_question($cases); ?>
      </section>
      <br>
      <br>
      <br>
      <section class="CONTACT">
        <a name="contacto"></a>    <!-- Ancla del formulario de contacto -->
        <div class="google-maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4626.520027383228!2d-57.953372836557946!3d-34.92040798308901!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1573938453425!5m2!1ses!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <br>
        <br>
        <form action="validate.php" method="post" >
          <h4>Formulario de contacto</h4>
          <div class="form-group col-md-6">
            <input name="email" id="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group col-md-6">
            <input name="file" id="file" type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-group">
            <textarea name="consulta" id="consulta" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comentario"></textarea>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form>
      </section>
    </main>
    <?php footer_of(); ?>
  </body>
</html>
