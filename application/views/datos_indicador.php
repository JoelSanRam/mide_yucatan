<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SEI | Yucatán</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?=base_url();?>plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/parallax/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/commerce/style.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/forum/theme/default.css" id="theme" rel="stylesheet" />
    <link href="<?=base_url();?>css/parallax/style.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>css/parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>css/parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link href="<?=base_url();?>css/general/general.css" rel="stylesheet" />
    <link href="<?=base_url();?>css/general/font-awesome.css" rel="stylesheet" />


    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    
    <?php include('header.php'); ?>

<!-- contenedor de 2 columas-->
<div class="container">
    <div class="row">
        <!--Primera columna-->
        <div class="col-md-8">
            <!--Primera subcolumna imagen-->
            <div class="col-md-2">
                <img width="100px" src="<?=base_url();?>img/sei_img/indicador_ejemplo.png" alt="">
            </div>
            <!--fin de la primera subcolumna-->
            <!--Segunda subcolumna texto-->
            <div class="col-md-10">
                <h3>Variaci&oacute;n porcentual del producto interno bruto estatal</h3>
                <p style="font-size: 12px;">
                Yucat&#225;n es un estado donde los niveles de crecimiento, desarrollo econ&oacute;mico y productividad
                social permiten a sus habitantes ejercer plenamente sus derechos econ&oacute;micos, sociales,
                culturales y ambientales, donde la intervenci&oacute;n gubernamental est&#225; dirigida a mejorar las
                condiciones de bienestar y de igualdad de oportunidades econ&oacute;micas para todos.
                </p>
            </div>
            <!--fin de la segunda subcolumna-->
        </div>
        <!--fin de la primera columna-->
        <!--Segunda columna-->
        <div class="col-md-4">
            <!--subcolumna descarga pdf-->
            <div class="col-md-12" style="background-color: #523fa0">
            <center>
                <span style="left: 1022.42px; top: 222.361px; font-size: 15.0544px; font-family: sans-serif; transform: scaleX(1.23434); color:white;">DESCARGAR FICHA INDICADOR</span>
                <img src="<?=base_url();?>img/sei_img/i_pdf.png" width="30%" alt=""><br>
                <button type="submit">Descargar</button>
            </center>
            </div>
            <!--fin subcolumna descarga pdf-->
            <div class="col-md-12">
                <br>
            </div>
            <!--subcolumna datos abiertos-->
            <div class="col-md-12" style="background-color: #123262">
            <center>
                <div class="col-md-12"><span style="left: 1022.42px; top: 222.361px; font-size: 15.0544px; font-family: sans-serif; transform: scaleX(1.23434); color:white;">DATOS ABIERTOS</span></div>
                <div class="col-md-4">
                <center>
                <img src="<?=base_url();?>img/sei_img/i_json.png" width="50%" alt="">
                <br>
                <br>
                <button type="submit" style="background-color: #123262; border-radius: 10px; padding-top:0;"><span style="font-size: 10px; color:white;">Descargar</span></button>
            </center>
            </div>
            <!--tercera-->
            <div class="col-md-4">
                <center>
                <img src="<?=base_url();?>img/sei_img/i_excel.png" width="50%" alt="">
                <br>
                <br>
                <button type="submit" style="background-color: #123262; border-radius: 10px; padding-top:0;"><span style="font-size: 10px; color:white;">Descargar</span></button>
            </center>
            </div>
            <!--fin tercera-->
            <!--cuarta-->
            <div class="col-md-4">
                <center>
                <img src="<?=base_url();?>img/sei_img/i_csv.png" width="50%" alt="">
                <br>
                <br>
                <button type="submit" style="background-color: #123262; border-radius: 10px; padding-top:0;"><span style="font-size: 10px; color:white;">Descargar</span></button>
            </center>
            </div>
            <!--fin cuarta-->
            </center> 
            </div>
            <!--fin subcolumna datos abiertos-->
        </div>
        <!--fin segunda columna-->
    </div>
</div>
<!--fin del contenedor-->






     
   <?php include('footer.php'); ?>  
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?=base_url();?>plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>plugins/bootstrap3/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?=base_url();?>plugins/js-cookie/js.cookie.js"></script>
    <script src="<?=base_url();?>js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>
</html>
