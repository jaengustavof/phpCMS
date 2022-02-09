<?php
    require 'includes/conexion.php';
    $counter = 1;
    $counter2 = 1;
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

	<title>Hollingo Web Development | About</title>
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
            <div class="sticky_menu_item itemRight h-25 text-end selected projectSt"><a href="#start">Start</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end projectSt"><a href="#sectionOne" class="project_sticky">.01</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end projectSt"><a href="#sectionTwo" class="project_sticky">.02</a></div>
            <div class="sticky_menu_item itemRight h-25 text-end projectSt"><a href="#sectionThree" class="project_sticky">.03</a></div>
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
                    <li class="menu_item"><a href="#">About Us</a></li>
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
                <li><a class="mobileLinks" href="index.php">HOME</a></li> 
                <li><a class="mobileLinks" href="#">PROJECTS</a></li> 
                <li><a class="mobileLinks" href="about.php">ABOUT</a></li> 
                <li><a class="mobileLinks" href="contact.php">CONTACT</a></li> 
            </ul>

        </div>
        <!--Menu Mobile End-->

        <!--Background-->
        <div class="area3">

        </div >
        <!--Background End-->

        <!--Main Carousel-->
        <div class="intro d-flex justify-content-center align-items-center" >
            <div class="intro_content">
                <div class="intro_content_first d-flex justify-content-start align-items-center">
                    <div class="intro_arrow"><img src="assets/rsc/img/Rectangle 2.1.png" alt=""> </div>
                    <div class="intro_first_text"><p>Our approach is simple</p></div>
                </div>
                <div class="intro_content_main d-flex align-items-center"><h1 class="intoContentAbout"><?php
                $sqlQueryTexto = "SELECT * from `inicio` WHERE id LIKE 2;";
                $queryQueryTexto = mysqli_query($conectar, $sqlQueryTexto);
                while($rowQueryTexto = mysqli_fetch_assoc($queryQueryTexto)){
                    echo $rowQueryTexto['texto'];
                }
                ?></h1></div>
                <div class="intro_content_scroll d-flex align-items-center"><p>We are problem solvers.</p></div>
            </div>
        </div>
        <!--Main Carousel End-->
        <div class="container-fluid degra"></div>
    </div>
    
</header>
<!-- Header End-->

<!-- SECTION Carrusel -->
<div class="container-fluid aboutUsCarrusel d-flex flex-column justify-content-center align-items-center firstCarr">
    <div class="container col-8 about_us_container p-0">
        <div class="row slider_about_us m-0">
            <div class="col p-0 d-flex flex-column justify-content-end">
                <h2 class="about_us_heading" id="demo"></h2>
                <p class="about_us_text">  </p>
            </div>
            <div class="col p-0">
                <div class="pic_container_one"></div>
                <div class="pic_container_two">
                    <img src="assets/rsc/img/about1.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container col-8 about_us_dots d-flex justify-content-around align-items-center">
        <div class="dots_container d-flex">
            <div class="dot d-flex justify-content-center align-items-center"><i class="fas fa-circle"></i></div>
            <div class="dot d-flex justify-content-center align-items-center"><i class="far fa-circle"></i></div>
            <div class="dot d-flex justify-content-center align-items-center"><i class="far fa-circle"></i></div>

        </div>
    </div>
</div>
<!-- SECTION Carrusel END-->

<!-- SECTION Our Partners-->
<div class="container-fluid our_partners d-flex justify-content-center align-items-center">
    <div class="containet col-8 partners_text_container d-flex flex-column justify-content-around align-items-center">
        <h2>OUR PARTNERS</h2>
        <p>We partner with businesses across a wide range of industries to build innovative, performance-based websites, centered on building brand awareness for your online storefront.</p>
        <button class="partnersButton">Latest Work</button>
    </div>
</div>
<!-- SECTION Our Partners END-->

<!-- SECTION Brands-->
<div class="container-fluid brands_we_work d-flex justify-content-center align-items-center">
    <div class="container col-8 brands-container">
        <div class="row h-25 d-flex align-items-center"><h2 class="text-center">BRANDS WE WORK WITH</h2></div>
        <div class="logosContainer h-75 d-flex flex-column justify-content-center ">
            <div class="row brandRow brow1"></div>
            <div class="row brandRow brow2"></div>
            <div class="row brandRow brow3"></div>
            <div class="col brandCol bcol1"></div>
            <div class="col brandCol bcol2"></div>
            <div class="col brandCol bcol3"></div>
        </div>
        <div class="logosContainerFront h-75 d-flex flex-column justify-content-around">
            <?php 
                $sqlLogo = "SELECT * FROM `about`";
                $queryLogo = mysqli_query($conectar, $sqlLogo);        
                $logoUrls = array();
                $logoAlt = array();
                while($rowQueryLogo = mysqli_fetch_assoc($queryLogo)){   
                    array_push($logoUrls, $rowQueryLogo['about_url']);   
                    array_push($logoAlt, $rowQueryLogo['about_alt']);                      
                }
                    $i = 0;
                    while($counter < 4){
                        echo '<div class="row">';
                            while($counter2 < 4){
                                echo '<div class="col">';
                                echo '<img src="'.$logoUrls[$i].'" alt="'.$logoAlt[$i].'" class="logoBrands">';                              
                                echo '</div>';
                                $i++;
                                $counter2++;
                            }
                        echo    '</div>';
                        $counter2 =1;
                        $counter++;
                    }
            ?>
        </div>
    </div>
</div>
<!-- SECTION Brands END-->

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
<script type="text/javascript" src="assets/js/about.js"></script>
<script>
</script>
</body>
</html>