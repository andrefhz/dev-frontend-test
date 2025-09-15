<?php include 'include/_config.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A InduPoint oferece soluções industriais em automação, manutenção preventiva e consultoria, impulsionando eficiência e inovação no setor.">
    <meta property="og:title" content="<?=$nomeEmpresa;?> - Soluções Industriais">
    <meta property="og:description" content="Automação, manutenção preventiva e consultoria para indústrias que buscam eficiência e inovação.">
    <title>Home - <?=$nomeEmpresa;?></title>

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

<section class="banner-index">
    <div class="banners">
        <div class="banner-01">
          <h2>Automação Inteligente</h2>
          <p>Integramos tecnologia de ponta aos processos produtivos para garantir mais eficiência, precisão e redução de custos.</p>
        </div>
        <div class="banner-02">
          <h2>Confiabilidade e Segurança</h2>
          <p>Nossas soluções de manutenção antecipam falhas, aumentam a vida útil dos equipamentos e reduzem paradas inesperadas.</p>
        </div>
        <div class="banner-03">
          <h2>Estratégia para Crescer</h2>
          <p>Oferecemos análises e planos sob medida para otimizar operações industriais e impulsionar resultados sustentáveis.</p>
        </div>
    </div>
</section>

<section class="sobre-index">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6">
        <h1>Transformando Desafios Industriais em Oportunidades</h1>
        <p>Na InduPoint, acreditamos que a inovação é a chave para o futuro da indústria. Nossa missão é desenvolver soluções capazes de otimizar processos, aumentar a produtividade e garantir resultados sustentáveis para empresas de todos os portes. Unindo tecnologia avançada, experiência de mercado e uma equipe altamente qualificada, oferecemos suporte completo para que sua indústria alcance novos patamares de eficiência e competitividade.</p>
        <a href="empresa" title="Conheça a <?=$nomeEmpresa;?> ">Conheça a Empresa</a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <img class="img-fluid" src="image/InduPoint_dark.png" title="<?=$nomeEmpresa;?>" alt="<?=$nomeEmpresa;?>">
      </div>
    </div>
  </div>
</section>

<section class="parallax-section">
  <div class="parallax-content">
    <div class="stat">
      <div class="number" data-target="44">0</div>
      <div class="label">anos</div>
    </div>
    <div class="stat">
      <div class="number" data-target="200">0</div>
      <div class="label">clientes</div>
    </div>
    <div class="stat">
      <div class="number" data-target="300">0</div>
      <div class="label">produtos</div>
    </div>
  </div>
</section>




<section class="solucoes-index">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="mouse_scroll">

		<div class="mouse">
			<div class="wheel"></div>
		</div>
		<div>
			<span class="m_scroll_arrows unu"></span>
			<span class="m_scroll_arrows doi"></span>
			<span class="m_scroll_arrows trei"></span>
		</div>
</div>
        <h2>Nossas Soluções</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card-index">
          <i class="fa-solid fa-star"></i>
          <h3>Automação Industrial</h3>
          <p>Integração de processos para mais produtividade</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-index">
            <i class="fa-solid fa-star"></i>
            <h3>Manutenção Preventiva</h3>
            <p>Maior segurança e confiabilidade em equipamentos</p>
          </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card-index">
            <i class="fa-solid fa-star"></i>
            <h3>Consultoria em Processos</h3>
            <p>Estratégias para otimizar linhas de produção</p>
          </div>
      </div>
    </div>
  </div>


</section>

<section class="noticias">
  <div class="container">
    <h2>Últimas Notícias</h2>
    <div id="news-container" class="row"></div>
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

 
