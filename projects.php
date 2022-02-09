<?php
    require 'includes/conexion.php';

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

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- BOOTSTRAP -->
       <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <!-- FONTS -->
    

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

	<title>Hollingo Web Development | Projects</title>
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
                    <li class="menu_item"><a href="#">Our Porjects</a> </li>
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
                <li><a class="mobileLinks" href="index.php">HOME</a></li> 
                <li><a class="mobileLinks" href="#">PROJECTS</a></li> 
                <li><a class="mobileLinks" href="about.php">ABOUT</a></li> 
                <li><a class="mobileLinks" href="contact.php">CONTACT</a></li> 
            </ul>

        </div>
        <!--Menu Mobile End-->

        <!--Background-->
        <div class="area2">
            <div class='box'>
                    <div class='wave -one'></div>
                    <div class='wave -two'></div>
                    <div class='wave -three'></div>
                </div>
        </div >
        <!--Background End-->

        <!--Main Carousel-->
        <?php 
            $sqlQueryTexto = "
            SELECT * FROM `inicio` WHERE id LIKE 3;
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
                <div class="intro_content_scroll d-flex align-items-center"><p><?php echo $last; ?></p></div>
            </div>
        </div>
        <!--Main Carousel End-->

        <div class="container-fluid degra"></div>
    </div>
    
</header>
<!-- Header End-->

<!-- SECTION -->
<div class="container-fluid section_projects" id="sectionOne">
    <div class="container col-8 h-100">
        <div class="row projectRow">
            <div class="col d-flex flex-column align-items-center justify-content-start h-100">
                
                <?php

                    if(isset($_POST['page'])){
                        $pageToShow = $_POST['page'];
                        if($pageToShow == 1){
                            $start = $pageToShow;
                            $end = ($start + 5);
                        }else{
                            $start = ($pageToShow*6)-5;
                            $end = ($start + 5);
                            $sqlProjects = 'SELECT * from `projects` WHERE id >='.$start.' AND id <='.$end.'';
                        }

                    }else{
                        $sqlProjects = 'SELECT * from `projects` WHERE id >=1 AND id <=6';
                        
                    }
                    $queryProjects = mysqli_query($conectar, $sqlProjects);
                    while($rowProjects = mysqli_fetch_assoc($queryProjects)){
                        if($rowProjects['id'] %2 != 0){
                            echo '<div class="project_example">
                                <div class="project_example_pic">
                                    <img src="'.$rowProjects['project_img'].'" alt="'.$rowProjects['project_alt'].'" class="project_example_pic_src">
                                    <div class="prj_img_gradient"></div>  
                                </div>
                                <div class="project_example_text d-flex flex-column align-items-start justify-content-center p-2">
                                    <div class="heading4_plus_line w-100 d-flex justify-content-between">
                                        <h4 class="d-flex"> '.$rowProjects['project_type'].'</h4>    
                                        <span class="d-flex justify-content-start align-items-center '.$rowProjects['project_type_class'].' "><hr class="w-100"></span>                          
                                    </div>
                                    
                                    <h3 class="projectTitleFit">'.$rowProjects['project_name'].'</h3>
                                </div>
                            </div>';
                        }                      
                    }
                ?>
                
            </div>


            <div class="col col d-flex flex-column align-items-center justify-content-start h-100 projectsRight">
            <?php   

                    if(isset($_POST['page'])){
                        $pageToShow = $_POST['page'];
                        if($pageToShow == 1){
                            $start = $pageToShow;
                            $end = ($start + 5);
                            $sqlProjects = 'SELECT * from `projects` WHERE id >='.$start.' AND id <='.$end.'';
                        }else{
                            $start = ($pageToShow*6)-5;
                            $end = ($start + 5);

                            $sqlProjects = 'SELECT * from `projects` WHERE id >='.$start.' AND id <='.$end.'';
                        }

                    }else{
                        $sqlProjects = 'SELECT * from `projects` WHERE id >=1 AND id <=6';
                        
                    }
                    $queryProjects = mysqli_query($conectar, $sqlProjects);
                    while($rowProjects = mysqli_fetch_assoc($queryProjects)){
                        if($rowProjects['id'] %2 == 0){
                            echo '<div class="project_example">
                                <div class="project_example_pic">
                                    <img src="'.$rowProjects['project_img'].'" alt="'.$rowProjects['project_alt'].'" class="project_example_pic_src">
                                    <div class="prj_img_gradient"></div>  
                                </div>
                                <div class="project_example_text d-flex flex-column align-items-start justify-content-center p-2">
                                    <div class="heading4_plus_line w-100 d-flex justify-content-between">
                                        <h4 class="d-flex"> '.$rowProjects['project_type'].'</h4>    
                                        <span class="d-flex justify-content-start align-items-center '.$rowProjects['project_type_class'].' "><hr class="w-100"></span>                          
                                    </div>
                                    
                                    <h3 class="projectTitleFit">'.$rowProjects['project_name'].'</h3>
                                </div>
                            </div>';
                        }                      
                    }
                ?>
                
            </div>
    
        </div>
        <div class="row pagination d-flex justify-content-center align-items-center">
            <form action="" method="POST" id="prjPagination">
                <ul class="d-flex justify-content-between align-items-center w-25">
                    <li><a href=""><<</a></li>
                    
                    <li><button type="submit" name="page" value="1"  class="paginationButton">1</button></li>
                    <span style="color: whitesmoke;">|</span>
                    <li><button type="submit" name="page" value="2" class="paginationButton" >2</button></li>
                    <span style="color: whitesmoke;">|</span>
                    <li><button type="submit" name="page" value="3" class="paginationButton" >3</button></li>
                    <li><a href="">>></a></li>
                </ul>
            </form>

        </div>
    </div>
    

</div>
                <!--Mobile-->
<div class="container-fluid section_projects" id="sectionOneMobile">
    <div class="container col-8 h-100">
        <div class="row projectRow">
            <div class="col d-flex flex-column align-items-center justify-content-start h-100">
                <?php
                    $sqlProjectsMobile = 'SELECT * from `projects` WHERE id <= 3';
                    $queryProjectsMobile = mysqli_query($conectar, $sqlProjectsMobile);
                    while($rowProjectsMobile = mysqli_fetch_assoc($queryProjectsMobile)){
                        
                            echo '<div class="project_example">
                                <div class="project_example_pic">
                                    <img src="'.$rowProjectsMobile['project_img'].'" alt="'.$rowProjectsMobile['project_alt'].'" class="project_example_pic_src">
                                    <div class="prj_img_gradient"></div>  
                                </div>
                                <div class="project_example_text d-flex flex-column align-items-start justify-content-center p-2">
                                    <div class="heading4_plus_line w-100 d-flex justify-content-between">
                                        <h4 class="d-flex"> '.$rowProjectsMobile['project_type'].'</h4>    
                                        <span class="d-flex justify-content-start align-items-center '.$rowProjectsMobile['project_type_class'].' "><hr class="w-100"></span>                          
                                    </div>
                                    
                                    <h3 class="projectTitleFit">'.$rowProjectsMobile['project_name'].'</h3>
                                </div>
                            </div>';                  
                        }               
                ?>
            </div>
        </div>
        <div class="row pagination d-flex justify-content-center align-items-center w-100">
            <ul class="d-flex justify-content-between align-items-center w-25">
                <li><a href=""><<</a></li>
                
                <li><a href="" class="selectedIndex">1</a></li>
                <span style="color: whitesmoke;">|</span>
                <li><a href="">2</a></li>
                <span style="color: whitesmoke;">|</span>
                <li><a href="">3</a></li>
                <li><a href="">>></a></li>
            </ul>
        </div>
    </div>
</div>
             <!--Mobile END-->

<!-- SECTION END-->

<!-- SECTION -->
<div class="container-fluid section_tech" id="sectionTwo">
    <div class="container  d-flex flex-column justify-content-center align-items-center techContainer col-sm-12 col-md-8">
        <h2>Our Technology Stack</h2>
        <div class="w-75 d-flex justify-content-between align-items-center techDiv">
            <i class="fab fa-html5" style="color: #DD4B25;"></i>
            <i class="fab fa-css3-alt" style="color: #264DE4;"></i>
            <i class="fab fa-js-square" style="color: #EFD81D;"></i>
            <i class="fab fa-php" style="color: #6E72AB;"></i>
        </div>
        <div class="w-75 d-flex justify-content-between align-items-center techDiv">
            <i class="fab fa-react" style="color: #57D2F3;"></i>
            <i class="fab fa-angular" style="color: #DF2E31;"></i>
            <i class="fab fa-docker" style="color: #2391E6;"></i>
            <i class="fab fa-node" style="color: #ffffff;"></i>
        </div>
    </div>
    

</div>
<!-- SECTION END-->

<!-- SECTION -->
<div class="container-fluid section_contact_us" id="sectionThree">
    <div class="container col-sm-12 col-md-8 d-flex flex-column justify-content-around align-items-center h-100">
        <h2>LET'S GET TO WORK.</h2>
        <h3>Have an unsolvable problem or audacious idea?</h3>
        <h4>We’d love to hear about it</h4>

        <button type="button" class="contactButton d-flex justify-content-center align-items-center">Contact Us</button>
    </div>
</div>
<!-- SECTION END-->

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