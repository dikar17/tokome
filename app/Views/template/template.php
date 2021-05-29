
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('bootstrap-4.0.0/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    
    <?= $this->include('template/navbar');?>

    <?= $this->renderSection('content'); //disini mencetak sebuah section "content"(namanya sectionnya bebas)?> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('bootstrap-4.0.0/jquery-3.6.0.min.js')?>"></script><!--download jquery-3.6.0.min.js lalu taruh di folder booststrap-->
    <script src="<?= base_url('bootstrap-4.0.0/assets/js/vendor/popper.min.js')?>"></script>
    <script src="<?= base_url('bootstrap-4.0.0/dist/js/bootstrap.min.js')?>"></script>
  </body>
</html>
