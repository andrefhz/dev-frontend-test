<?php include 'include/_config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A InduPoint oferece soluções industriais em automação, manutenção preventiva e consultoria, impulsionando eficiência e inovação no setor.">
    <meta property="og:title" content="<?=$nomeEmpresa;?> - Soluções Industriais">
    <meta property="og:description" content="Automação, manutenção preventiva e consultoria para indústrias que buscam eficiência e inovação.">
    <title>Produtos - <?=$nomeEmpresa;?></title>

    <link rel="icon" href="image/favicon.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/slick.css">
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
        <li class="breadcrumb-item"><a href="index.php" title="Home">Home</a></li>
        <li class="breadcrumb-item"><a href="produtos.php" title="Produtos">Produtos</a></li>
      </ol>
    </div>
  </div>
</section>




    
<section class="produtos">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Conheça nossos produtos</h2>
            </div>
        </div>
        <div class="row">
            
            <?php
            // Array de produtos industriais
            $produtos = [
                [
                    "nome" => "Válvula Reguladora de Pressão Hidráulica",
                    "imagem" => "image/produtos/produto-01.jpg"
                ],
                [
                    "nome" => "Engrenagem Cônica de Precisão",
                    "imagem" => "image/produtos/produto-02.jpg"
                ],
                [
                    "nome" => "Rolamento Esférico de Carga Pesada",
                    "imagem" => "image/produtos/produto-03.jpg"
                ],
                [
                    "nome" => "Bomba Centrífuga Industrial",
                    "imagem" => "image/produtos/produto-04.jpg"
                ],
                [
                    "nome" => "Acoplamento Flexível de Torque",
                    "imagem" => "image/produtos/produto-05.jpg"
                ],
                [
                    "nome" => "Cilindro Pneumático de Dupla Ação",
                    "imagem" => "image/produtos/produto-06.jpg",
                ]
            ];

            
            foreach ($produtos as $produto): ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="<?= $produto['imagem']; ?>" class="img-fluid" alt="<?= $produto['nome']; ?>" title="<?= $produto['nome']; ?>">
                        <h3><?= $produto['nome']; ?></h3>
                        <a href="#" title="Veja mais sobre <?= $produto['nome']; ?>">Veja mais</a>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</section>


   

<?php include 'include/_footer.php'; ?>

 
