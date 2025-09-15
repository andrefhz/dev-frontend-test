<?php include 'include/_config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A InduPoint oferece soluções industriais em automação, manutenção preventiva e consultoria, impulsionando eficiência e inovação no setor.">
    <meta property="og:title" content="<?=$nomeEmpresa;?> - Soluções Industriais">
    <meta property="og:description" content="Automação, manutenção preventiva e consultoria para indústrias que buscam eficiência e inovação.">
    <title>Contato - <?=$nomeEmpresa;?></title>

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
        <li class="breadcrumb-item"><a href="contato.php" title="Contato">Contato</a></li>
      </ol>
    </div>
  </div>
</section>


    
<section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Entre em contato
                    <span> conosco </span></h2>
                <p>Fale com a InduPoint e descubra como podemos apoiar o crescimento do seu negócio.</p>
            </div>
            <div class="row">
                <div class="col-md-5 mb-5">
                    <div class="title">
                        <h3>Informações para contato:</h3>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">Telefone :
                                <br>
                                <span><?=$tel1;?> / <?=$tel2;?></span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block">Email :
                                <br>
                                <span><a href="mailto:<?=$email;?>" title="Email - <?=$nomeEmpresa;?>"><?=$email;?></a></span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">Endereço :<br>
                                <span><?=$endereco;?></span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Assunto">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Mensagem"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
<section class="localizacao-index">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Onde estamos localizados?</h2>

        <div class="frame">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.410834785183!2d-46.5653532!3d-23.5536839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e9abc0f9f3f%3A0x9953ed75d9229a3e!2sR.%20C%C3%A2ndido%20Lacerda%2C%20198%20-%20Vila%20Reg.%20Feij%C3%B3%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003336-010!5e0!3m2!1spt-BR!2sbr!4v1757864238285!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


   

<?php include 'include/_footer.php'; ?>

 
