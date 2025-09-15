<?php include 'include/_config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A InduPoint oferece soluções industriais em automação, manutenção preventiva e consultoria, impulsionando eficiência e inovação no setor.">
    <meta property="og:title" content="<?=$nomeEmpresa;?> - Soluções Industriais">
    <meta property="og:description" content="Automação, manutenção preventiva e consultoria para indústrias que buscam eficiência e inovação.">
    <title>Galeria - <?=$nomeEmpresa;?></title>

    <link rel="icon" href="image/favicon.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fancy.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'include/_header.php'; ?>

<section class="breadcrumb-section">
  <div class="container">
    <div class="breadcrumb-wrapper">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index" title="Home">Home</a></li>
        <li class="breadcrumb-item"><a href="galeria" title="Galeria">Galeria</a></li>
      </ol>
    </div>
  </div>
</section>

<section class="galeria">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><h2>Galeria</h2></div>
    </div>

    <div class="row">

    <?php for ($i=1; $i <7 ; $i++) { ?>    
      <div class="col-sm-12 col-md-6 col-lg-3">
        <a href="image/galeria/galeria-<?=$i;?>" title="Galeria - <?=$i;?>" data-fancybox="gallery" data-caption="Galeria - <?=$i;?>">
            <img class="img-fluid img-galeria" src="image/galeria/galeria-<?=$i;?>" alt="Galeria - <?=$i;?>" title="Galeria - <?=$i;?>" />
        </a>
      </div>
      <?php  };  ?>
    </div>
  </div>
</section>


   

<?php include 'include/_footer.php'; ?>

 
