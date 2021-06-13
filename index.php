<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unio Delivery</title>

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

    <link rel="icon" type="image/png" sizes="32x32" href="index/images/fev.png">
 
    <link type="text/css" rel="stylesheet" href="index/css/index.css">
</head>
<body>

<div class="loader"><div class="loader_div"></div></div>

<section class="banner_sec">
    <div class="container">
        <div class="banner_content">
        	<div class="row align-items-center">
        		<div class="col-sm-10 col-6">
		            <a href="#" class="logo_text">
		               <img src="index/images/logo-white.png" alt="logo" style="max-width: 200px;">
		             </a>
		        </div>
		        <div class="col-sm-2 col-2 d-none">
		            <a href="https://lojaexemplo.uniodelivery.com/formulario_cadastro" class="btn site_btn" target="_blank">Solicite agora</a>
		        </div>
		    </div>


            <h1><span>Bem-vindo a Unio Delivery, </span> sua maneira de inovar!</p>
            <div class="go_down_arrow">
              <i class="fa fa-arrow-down fa-2x" ></i>
            </div>
                <!-- #### CORRIGIR TAMANHO -->
            <iframe style="width: 100%; height: 200px" class="isMobile" src="https://www.youtube.com/embed/m8OHW1GNyuY" frameborder="0"></iframe>
            <iframe style="width: 80%; height: 500px" class="isWeb" src="https://www.youtube.com/embed/m8OHW1GNyuY" frameborder="0"></iframe>
            <br/>
            <br/>
            <a href="https://api.whatsapp.com/send?phone=551135652171&text=Estou interessado na ferramenta, porém tenho algumas dúvidas, poderia me ajudar?" class="btn site_btn" target="_blank">Fale conosco</a>
        </div>
    </div>
</section>

<!-- Main Body -->
<section class="main_body" id="main_body">
    <div class="container">
        <h2>Nossa <span>equipe</span></h2>
        <div class="templates_list">
            <div class="row">
                
                <div class="col-md-12 col-lg-12">
                    <div class="template_block">
                        <div class="template_block_inner">
                            <div class="">
                                    <img src="index/images/block_img3.jpg" alt="banner">
                            </div>
                            <h3 class="template_title">O que é a Unio Delivery?</h3>
                            <h3 class="template_title">
                                <em style="font-size:14px; color:#636e72; text-align: left !important">
                                    Apaixonados por tecnologia somos uma empresa que desenvolve soluções inovadoras para o mercado digital. Somos motivados e atuamos de forma direcionada com o objetivo de gerar resultados aos pequenos e médios empreendedores.
                                </em>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <br>
      

    </div>    
</section>

<!-- ready section -->
<section class="readyToPurchase">
	<div class="container">
		<div class="readyToPurchaseInner">
			<h3>Seu sistema delivery </h3> <h5>Loja Virtual + Aplicativo </h5> <br/><h3>Pelo melhor custo benefício do mercado</h3>
			<a href="https://api.whatsapp.com/send?phone=551135652171&text=Estou interessado na ferramenta, porém tenho algumas dúvidas, poderia me ajudar?" class="btn">WhatsApp</a>
		</div>
	</div>
</section><!-- /. ready section -->
<!-- External JS libraries -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">
        
        var isMobile = false;
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            isMobile = true;
        }

        $(document).ready(function() {


            setTimeout(function(){ $('#iframeyt').click(); }, 3000);

            if (isMobile) {
                $('.isMobile').show();
                $('.isWeb').hide();
            }else{
                $('.isMobile').hide();
                $('.isWeb').show();
            }
        });

    </script>
</body>
</html>
