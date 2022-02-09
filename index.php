<?php
    require 'includes/conexion.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--META-->
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--retrocompatible con microsoft edge-->
    <meta name="author" content="Gustavo Jaén Vidal">
    <meta name="copyright" content="">
    <meta name="contact" content="jaengustavof@gmail.com">
    <meta name="description" content=""> <!--descripcion de la pagina web-->
    <meta name="keywords" content=""> <!--palabras clave por las que se indexan-->
    <meta name="robots" content="Index, Follow"> <!--sustituye al robots.txt / el dia que se indexe cambia el content-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">  

    <!-- ESTILOS -->

    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- BOOTSTRAP -->

    <!-- FONTS -->
    

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<title>Hollingo Web Development | Home</title>
</head>
<body>

<!-- Sticky -->
<div class="container-fluid sticky">
    <div class="row h-100">
        <div class="col-6 d-flex flex-column align-items-start p-0 h-100">
            <div class="sticky_menu_item h-50 "><p class="rotatedText">Follow Us</p> </div>
            <div class="sticky_menu_item h-25"><i class="fab fa-linkedin"></i></div>
            <div class="sticky_menu_item h-25"><i class="fab fa-instagram"></i></div>
        </div>
        <div class="col-6 d-flex flex-column align-items-end p-0 h-100">
            <div class="sticky_menu_item itemRight h-25 text-end selected"><a href="#start">Start</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end"><a href="#sectionOne">.01</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end"><a href="#sectionTwo">.02</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end"><a href="#sectionThree">.03</a></div>
        </div>
    </div>
</div>
<!-- Sticky End-->

<!-- Header -->
<header id="start">

    <div class="container-fluid header p-0">
        <!--Menu-->
        <nav class="w-100 d-flex justify-content-between" id="menuDesktop">
            <div class="logo d-flex justify-content-start align-items-center w-25"><a href="index.php"><img src="assets/rsc/img/logo.webp" alt=""></a> </div>
            <div class="menu d-flex justify-content-center align-items-center w-75">
                <ul class="d-flex justify-content-around p-0 m-0 w-50">
                    <li class="menu_item"><a href="projects.php">Our Porjects</a> </li>
                    <li class="menu_item"><a href="about.php">About Us</a></li>
                    <li class="menu_item"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="account d-flex justify-content-end align-items-center w-25"><a href=""><i class="far fa-user-circle"></i>Account</a>              
            </div>
        </nav>
        <!--Menu End-->

        <!--Menu Mobile-->
        <nav class="w-100 d-flex justify-content-between" id="menuMobile">
            <div class="logo d-flex justify-content-start align-items-center w-50"><img src="assets/rsc/img/logo.webp" alt=""></div>
            <div class="account d-flex justify-content-end align-items-center w-50"><i class="fas fa-bars"></i>              
            </div>
            
        </nav>
        <div class="menuMobileLinks d-flex flex-column justify-content-around align-items-center h-100">
            <i class="far fa-times-circle"></i>
            <ul class="">
                <li><a class="mobileLinks" href="#">HOME</a></li> 
                <li><a class="mobileLinks" href="projects.php">PROJECTS</a></li> 
                <li><a class="mobileLinks" href="about.php">ABOUT</a></li> 
                <li><a class="mobileLinks" href="contact.php">CONTACT</a></li> 
            </ul>

        </div>
        <!--Menu Mobile End-->

        <!--Background-->
        <div class="area" >
            <ul class="circles">

            </ul>
        </div >
        <!--Background End-->

        <!--Main Carousel-->
        <?php 
            $sqlQueryTexto = "
            SELECT * FROM `inicio` WHERE id LIKE 1;
            ";

            $queryQueryTexto = mysqli_query($conectar, $sqlQueryTexto);
            while ($rowQueryTexto = mysqli_fetch_assoc($queryQueryTexto)){
                $title = $rowQueryTexto['title'];
                $text = $rowQueryTexto['texto'];
                $last = $rowQueryTexto['footer'];
            };
        ?>
        <div class="intro d-flex justify-content-center align-items-center" >
            <div class="intro_content">
                <div class="intro_content_first d-flex justify-content-start align-items-center">
                    <div class="intro_arrow"><img src="assets/rsc/img/Rectangle 2.1.png" alt=""> </div>
                    <div class="intro_first_text"><p><?php echo $title; ?></p></div>
                </div>
                <div class="intro_content_main d-flex align-items-center">
                    <h1>
                        <?php echo $text; ?>
                    </h1>
                </div>
                <div class="intro_content_scroll d-flex align-items-center"><p><?php echo $last; ?></p><i class="fas fa-arrow-down"></i></div>
            </div>
        </div>
        <!--Main Carousel End-->
     
        <div class="container-fluid degra"></div>
    </div>
    
</header>
<!-- Header End-->

<!-- Section Desktop -->
<?php 
        $sqlQueryTexto = "
        SELECT * FROM `sectioninicio`;
        ";

        $queryQueryTexto = mysqli_query($conectar, $sqlQueryTexto);
        while ($rowQueryTexto = mysqli_fetch_assoc($queryQueryTexto)){
            if($rowQueryTexto['id'] %2 == 0){
                echo '<section class="container-fluid section_one" id="'.$rowQueryTexto['section_id'].'">
                <div class="container col-lg-10 col-xl-8">
                    <div class="row h-100 p-2">
                        <div class="col-4 backImg '.$rowQueryTexto['bg_image'].'"></div>
                        <div class="col-8 d-flex flex-column justify-content-center h-100">
                            <div class="section_indexNo '.$rowQueryTexto['index_no_attr'].'">'.$rowQueryTexto['index_no'].'</div>
                            <div class="sectionText '.$rowQueryTexto['section_text'].'">
                                <div class="intro_arrow d-flex intro_first_text"><hr class="mx-2"><p>'.$rowQueryTexto['intro_first_text'].'</p> </div>
                                <h2 class="mt-3"><span>'.$rowQueryTexto['section_h2_first'].'</span> <br> <span>'.$rowQueryTexto['section_h2_second'].'</span> </h2>
                                <p class="section_text_p mt-3 mb-2">'.$rowQueryTexto['section_text_p'].'</p>
                                <div class="intro_content_scroll d-flex align-items-center mt-5"><p>'.$rowQueryTexto['intro_content_scroll'].'</p></div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>';
            }else{
                echo '<section class="container-fluid section_one" id="'.$rowQueryTexto['section_id'].'">
                <div class="container col-lg-10 col-xl-8">
                    <div class="row h-100 p-2">
                        <div class="col-8 d-flex flex-column justify-content-center h-100">
                        <div class="section_indexNo '.$rowQueryTexto['index_no_attr'].'">'.$rowQueryTexto['index_no'].'</div>
                        <div class="sectionText '.$rowQueryTexto['section_text'].'">
                            <div class="intro_arrow d-flex intro_first_text"><hr class="mx-2"><p>'.$rowQueryTexto['intro_first_text'].'</p> </div>
                            <h2 class="mt-3"><span>'.$rowQueryTexto['section_h2_first'].'</span> <span>'.$rowQueryTexto['section_h2_second'].'</span> </h2>
                            <p class="section_text_p mt-3 mb-2">'.$rowQueryTexto['section_text_p'].'</p>
                            <div class="intro_content_scroll d-flex align-items-center mt-5"><p>'.$rowQueryTexto['intro_content_scroll'].'</p></div>
                        </div>
                    </div>
                        <div class="col-4 backImg '.$rowQueryTexto['bg_image'].'"></div>
                    </div>
                </div>
            </section>';
            }
                    
};?>
<!-- Section Desktop End-->


<!-- SECTION MOBILE -->
<?php 
    $sqlMobileInicio = "SELECT * FROM `inicio_mobile`";
    $queryMobileInicio = mysqli_query($conectar, $sqlMobileInicio);
    while($rowMobileInicio = mysqli_fetch_assoc($queryMobileInicio)){
        if($rowMobileInicio['id'] %2 == 0){
            echo '<section class="container col-md-12 section_one_mobile" id="'.$rowMobileInicio['inicio_mobile_id'].'">
                    <div class="row h-100 p-2">
                        <div class="col-5 backImgMobile '.$rowMobileInicio['inicio_mobile_bgimg'].'"></div>
                        <div class="col-7 d-flex flex-column justify-content-center h-100">
                            <div class="sectionMobile_indexNo">'.$rowMobileInicio['inicio_mobile_indexno'].'</div>
                            <div class="sectionTextMobile '.$rowMobileInicio['inicio_mobile_sectiontext'].'">
                                <div class="intro_arrow d-flex intro_first_textMobile"><hr class="mx-2"><p>'.$rowMobileInicio['inicio_mobile_introtext'].'</p> </div>
                                <h2 class="mt-3"><span>'.$rowMobileInicio['inicio_mobile_h2first'].'</span> <span>'.$rowMobileInicio['inicio_mobile_h2second'].'</span></h2>
                                <p class="section_textMobile_p mt-3 mb-2"> '.$rowMobileInicio['inicio_mobile_textp'].'</p>
                                <div class="intro_contentMobile_scroll d-flex align-items-center mt-5"><p>'.$rowMobileInicio['inicio_mobile_scroll'].'</p></div>
                            </div>
                        </div>                       
                    </div>
                </section>';
        }else {
            echo '<section class="container col-md-12 section_one_mobile" id="'.$rowMobileInicio['inicio_mobile_id'].'">
                    <div class="row h-100 p-2">                    
                        <div class="col-7 d-flex flex-column justify-content-center h-100">
                            <div class="sectionMobile_indexNo">'.$rowMobileInicio['inicio_mobile_indexno'].'</div>
                            <div class="sectionTextMobile '.$rowMobileInicio['inicio_mobile_sectiontext'].'">
                                <div class="intro_arrow d-flex intro_first_textMobile"><hr class="mx-2"><p>'.$rowMobileInicio['inicio_mobile_introtext'].'</p> </div>
                                <h2 class="mt-3"><span>'.$rowMobileInicio['inicio_mobile_h2first'].'</span> <span>'.$rowMobileInicio['inicio_mobile_h2second'].'</span></h2>
                                <p class="section_textMobile_p mt-3 mb-2"> '.$rowMobileInicio['inicio_mobile_textp'].'</p>
                                <div class="intro_contentMobile_scroll d-flex align-items-center mt-5"><p>'.$rowMobileInicio['inicio_mobile_scroll'].'</p></div>
                            </div>
                        </div>   
                        <div class="col-5 backImgMobile '.$rowMobileInicio['inicio_mobile_bgimg'].'"></div>                    
                    </div>
                </section>';
        }
    }
?>
<!-- SECTION MOBILE END-->

<!-- FOOTER -->
<footer class="container-fluid"> 
    <div class="container col-sm-12 col-md-8 h-100">
        <div class="row h-100">
            <div class="col-6 d-flex flex-column justify-content-between h-100">
                <div class="row">
                    <h4>HOLLINGO</h4>
                    <p>Discover how we can help you achieve incredible results with a growth-driven website.</p>
                </div>
                <div class="row"><p>Copyright 2021 HOLLINGO, Inc. Terms & Privacy</p></div>
            </div>
            <div class="col-3 d-flex flex-column justify-content-between h-100">
                <div class="row">
                    <h4>More on the Blog</h4>
                </div>
                <div class="row d-flex flex-column justify-content-between h-100">
                    <ul class="d-flex flex-column justify-content-between h-100">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Latest Insights</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>                
            </div>
            <div class="col-3 lastFooterRow">
                <div class="row">
                    <h4>More on HOLLINGO</h4>
                </div>
                <div class="row d-flex flex-column justify-content-between h-100">
                    <ul class="d-flex flex-column justify-content-between h-100">
                        <li><a href="#">The Team</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">  </a></li>
                        <li><a href="#">  </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->

<!-- SCRIPTS -->
<script type="text/javascript" src="vendor/jquery/jquery-3.6.0.min.js"></script> <!-- JQUERY -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script><!-- BOOTSTRAP -->
<script type="text/javascript" src="assets/js/scripts.js"></script>
<script>

</script>
</body>
</html>