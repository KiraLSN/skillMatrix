<?php

include('conexao.php');

include('login/verifica_login.php');

//include('login/redirect.php');

if(isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
}

$matricula = $_SESSION['matricula'];
$funcionario = $_SESSION['nome'];

global $check;

$check = array();

for($i=0; $i<60; $i++){
    
    $check[$i]= "";
}

global $leva;

$pdo_verifica = $conexao_pdo->prepare("select * from matriz WHERE matricula = ".$matricula." ");
                     $pdo_verifica->execute();

                    while($fetch = $pdo_verifica->fetch()){
                        
                        if($fetch['audioled'] == 1){
                            $check[1]="checked";
                        }else{
                            $check[1]="";
                        }
                        
                        if($fetch['audio'] == 1){
                            $check[2]="checked";
                        }else{
                            $check[2]="";
                        }
                        
                        if($fetch['audiorcv'] == 1){
                            $check[3]="checked";
                        }else{
                            $check[3]="";
                        }
                        
                        if($fetch['bglassprensa'] == 1){
                            $check[4]="checked";
                        }else{
                            $check[4]="";
                        }
                        
                        if($fetch['bracketBateria'] == 1){
                            $check[5]="checked";
                        }else{
                            $check[5]="";
                        }
                        
                        if($fetch['coaxialsub'] == 1){
                            $check[6]="checked";
                        }else{
                            $check[6]="";
                        }
                        
                        if($fetch['callTest'] == 1){
                            $check[7]="checked";
                        }else{
                            $check[7]="";
                        }
                        
                        if($fetch['cameraTeste'] == 1){
                            $check[8]="checked";
                        }else{
                            $check[8] = "";
                            
                        }
                        
                        if($fetch['CNMatching'] == 1){
                            $check[9]="checked";
                        }else{
                            $check[9] = " ";
                            
                        }
                        
                        if($fetch['fingerPrint'] == 1){
                            $check[10]="checked";
                        }else{
                            $check[10] = " ";
                            
                        }
                        
                        if($fetch['tapeCameraMega'] == 1){
                            $check[11]="checked";
                        }else{
                            $check[11] = " ";
                            
                        }
                        
                        if($fetch['tapeIsolante'] == 1){
                            $check[12]="checked";
                        }else{
                            $check[12] = " ";
                            
                        }
                        
                        if($fetch['forceTouchTest'] == 1){
                            $check[13]="checked";
                        }else{
                            $check[13] = " ";
                            
                        }
                        
                        if($fetch['frontCAMScrew'] == 1){
                            $check[14]="checked";
                        }else{
                            $check[14] = " ";
                            
                        }
                        
                        if($fetch['functionTeste'] == 1){
                            $check[15]="checked";
                        }else{
                            $check[15] = " ";
                            
                        }
                        
                        if($fetch['imei'] == 1){
                            $check[16]="checked";
                        }else{
                            $check[16] = " ";
                            
                        }
                        
                        if($fetch['lcia'] == 1){
                            $check[17]="checked";
                        }else{
                            $check[17] = " ";
                            
                        }
                        
                        if($fetch['moduloSensor01'] == 1){
                            $check[18]="checked";
                        }else{
                            $check[18] = " ";
                            
                        }
                        
                        if($fetch['moduloSensor02'] == 1){
                            $check[19]="checked";
                        }else{
                            $check[19] = " ";
                            
                        }
                        
                        if($fetch['caboCoaxial'] == 1){
                            $check[20]="checked";
                        }else{
                            $check[20] = " ";
                            
                        }
                        
                        if($fetch['frontAssy'] == 1){
                            $check[21]="checked";
                        }else{
                            $check[21] = " ";
                            
                        }
                        
                        if($fetch['rear'] == 1){
                            $check[22]="checked";
                        }else{
                            $check[22] = " ";
                            
                        }
                        
                        if($fetch['earJack'] == 1){
                            $check[23]="checked";
                        }else{
                            $check[23] = " ";
                            
                        }
                        
                        if($fetch['montagemMegaCAM'] == 1){
                            $check[24]="checked";
                        }else{
                            $check[24] = " ";
                            
                        }
                        
                        if($fetch['montagemOcta'] == 1){
                            $check[25]="checked";
                        }else{
                            $check[25] = " ";
                            
                        }
                        
                        if($fetch['montagemOctaPrensa'] == 1){
                            $check[26]="checked";
                        }else{
                            $check[26] = " ";
                            
                        }
                        
                        if($fetch['montageRear'] == 1){
                            $check[27]="checked";
                        }else{
                            $check[27] = " ";
                            
                        }
                        
                        
                        if($fetch['OTGPDChagerÍris'] == 1){
                            $check[28]="checked";
                        }else{
                            $check[28] = " ";
                            
                        }
                        
                        if($fetch['packing'] == 1){
                            $check[29]="checked";
                        }else{
                            $check[29] = " ";
                            
                        }
                        
                        if($fetch['bracketParafusar'] == 1){
                            $check[30]="checked";
                        }else{
                            $check[30] = " ";
                            
                        }
                        
                        if($fetch['powerOn'] == 1){
                            $check[31]="checked";
                        }else{
                            $check[31] = " ";
                            
                        }
                        
                        if($fetch['prensa'] == 1){
                            $check[32]="checked";
                        }else{
                            $check[32] = " ";
                            
                        }
                        
                        if($fetch['prensaAB'] == 1){
                            $check[33]="checked";
                        }else{
                            $check[33] = " ";
                            
                        }
                        
                        if($fetch['prensaBateria'] == 1){
                            $check[34]="checked";
                        }else{
                            $check[34] = " ";
                            
                        }
                        
                        if($fetch['prensaBracketBateria'] == 1){
                            $check[35]="checked";
                        }else{
                            $check[35] = " ";
                            
                        }
                        
                        if($fetch['prensaTapeBateria'] == 1){
                            $check[36]="checked";
                        }else{
                            $check[36] = " ";
                            
                        }
                        
                        if($fetch['preparacaoBracket'] == 1){
                            $check[37]="checked";
                        }else{
                            $check[37] = " ";
                            
                        }
                        
                        if($fetch['protectorVinil'] == 1){
                            $check[38]="checked";
                        }else{
                            $check[38] = " ";
                            
                        }
                        
                        if($fetch['radiation'] == 1){
                            $check[39]="checked";
                        }else{
                            $check[39] = " ";
                            
                        }
                        
                        if($fetch['RCVFinger'] == 1){
                            $check[40]="checked";
                        }else{
                            $check[40] = " ";
                            
                        }
                        
                        if($fetch['revisaoScrew'] == 1){
                            $check[41]="checked";
                        }else{
                            $check[41] = " ";
                            
                        }
                        
                        if($fetch['revisao01'] == 1){
                            $check[42]="checked";
                        }else{
                            $check[42] = " ";
                            
                        }
                        
                        if($fetch['revisao02'] == 1){
                            $check[43]="checked";
                        }else{
                            $check[43] = " ";
                            
                        }
                        
                        if($fetch['revisor'] == 1){
                            $check[44]="checked";
                        }else{
                            $check[44] = " ";
                            
                        }
                        
                        if($fetch['RFCalResultado'] == 1){
                            $check[45]="checked";
                        }else{
                            $check[45] = " ";
                            
                        }
                        
                        if($fetch['RSTPowerOn'] == 1){
                            $check[46]="checked";
                        }else{
                            $check[46] = " ";
                            
                        }
                        
                        if($fetch['RSTTVOC'] == 1){
                            $check[47]="checked";
                        }else{
                            $check[47] = " ";
                            
                        }
                        
                        if($fetch['semiFunctionTest'] == 1){
                            $check[48]="checked";
                        }else{
                            $check[48] = " ";
                            
                        }
                        
                        if($fetch['SIMTrayTest'] == 1){
                            $check[49]="checked";
                        }else{
                            $check[49] = " ";
                            
                        }
                        
                        if($fetch['SIMTrayPrensaC'] == 1){
                            $check[50]="checked";
                        }else{
                            $check[50] = " ";
                            
                        }
                        
                        if($fetch['testeUmidade'] == 1){
                            $check[51]="checked";
                        }else{
                            $check[51] = " ";
                            
                        }
                        
                        if($fetch['integradoLeakage'] == 1){
                            $check[52]="checked";
                        }else{
                            $check[52] = " ";
                            
                        }
                        
                        if($fetch['TVOC'] == 1){
                            $check[53]="checked";
                        }else{
                            $check[53] = " ";
                            
                        }
                        
                        if($fetch['unificationFuctionForceTouch'] == 1){
                            $check[54]="checked";
                        }else{
                            $check[54] = " ";
                            
                        }
                        
                        if($fetch['WPI'] == 1){
                            $check[55]="checked";
                        }else{
                            $check[55] = " ";
                            
                        }
                        
                        if($fetch['WPT'] == 1){
                            $check[56]="checked";
                        }else{
                            $check[56] = " ";
                            
                        }
                        
                        if($fetch['WPT01'] == 1){
                            $check[57]="checked";
                        }else{
                            $check[57] = " ";
                            
                        }
                        
                        
                        
                    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Skill Matrix - HHP Main</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">
    <!-- ICONE DE ATALHOS -->
    <link rel="apple-touch-icon" href="images/ICONETRAI.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/ICONETRAI.png" type="image/x-icon" />

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="home.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- ***** Top Search Area Start ***** -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Search Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="uzaNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php">
                        <h2>Skills de <?php echo $_SESSION['nome'];?> </h2>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">

                                <li><a style="color: red" href="login/sair.php">Sair</a></li>
                            </ul>




                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">



        <!-- Single Welcome Slide -->

        <!-- Background Curve -->
        <div class="background-curve">
            <img src="./img/core-img/curve-1.png" alt="" width="300">
        </div>








    </section>
    <!-- ***** Welcome Area End ***** -->








    <!-- ***** Blog Area Start ***** -->
    <section class="uza-blog-area">

        <!-- Background Curve -->

        <div class="blog-bg-curve">
            <img src="./img/core-img/curve-4.png">
        </div>




        <div class="container">








            <?php 
                                    
                                    ?>
            <div class="row">

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">

                    <!-- Post Content -->

                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">

                        <div id="formulario" class="post-content">
                            <span class="post-date" id="datou"><?php echo date("d ") ."de". date(" M "). "de ". date("Y") ?></span>
                            <h3 id="numcar">
                                <label>HABILIDADES</label>
                            </h3>


                            <form method="post" action="formCheck.php">


                                <div class="col-12 btn">

                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>POSTOS</td>
                                            <td>CHECK</td>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
    
    
    
    $pdo_verifica = $conexao_pdo->prepare("select * from postos order by posto ASC ");
                     $pdo_verifica->execute();
                                $i = 0;
            while($fetch = $pdo_verifica->fetch()){
                $i = $i+1;
                echo '<tr><td>' . $fetch['posto'] . '</td>';
                echo '<td><input type="checkbox" id="t[0]['.$i.']" name="t[0]['.$i.']"  '.$check[$i]. ' > '.$i.'</td></tr>';
                
                

                
            }
    
                                        ?>
                                    </tbody>
                                </table>
                                <button id="btnSend" name="btnSend" type="submit" class="btn uza-btn btn-3 mt-15">Adicionar Atividade </button>

                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>




    </section>
    <!-- ***** Blog Area End ***** -->



    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">

            <div class="row" style="margin-bottom: 30px;">

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());

                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>

        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/check.js"></script>




</body>

</html>
