octype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $judul; ?></title>
  </head>
  <style>
    body {
    background: url(<?= base_url(); ?>/assets/img/3.jpg);
    background-attachment: fixed;
    margin: 0;
    padding: 0;
    /*background-repeat: no-repeat;*/

  }

  h1, p, li {
   color : solid black;
  }
  </style>
  <body>

  	  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container">
  <a class="navbar-brand" href="#">Dokter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?= base_url(); ?>dokter/tampil">Dokter</a>
      <a class="nav-item nav-link" href="<?= base_url();?>peoples">Peoples</a>
       <a class="nav-item nav-link" href="#">About</a>

     
    </div>
  </div>
  </div>
</nav>