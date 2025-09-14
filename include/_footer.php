<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-center">
                <img src="image/InduPoint_whitegear.png" alt="<?=$nomeEmpresa;?>" title="<?=$nomeEmpresa;?>">
            </div>
            <div class="col-sm-12 col-sm-12 col-md-6 col-lg-4">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index" title="Home">Home</a></li>
                    <li><a href="empresa" title="Empresa">Empresa</a></li>
                    <li><a href="produtos" title="Produtos">Produtos</a></li>
                    <li><a href="contato" title="Contato">Contato</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-sm-12 col-md-6 col-lg-4">
                <h3>Informações</h3>
                <ul>
                    <li><p><a href="tel:+551111111111"><?=$tel1;?></a></p></li>
                    <li><p><a href="tel:+552222222222"><?=$tel2;?></a></p></li>
                    <li><p><a href="mailto:<?=$email;?>"><?=$email;?></a></p></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
        $(document).ready(function(){
            $('.banners').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            dots: false
            });
        });
</script>

</body>
</html>