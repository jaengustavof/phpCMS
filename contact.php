<?php
        
        require 'includes/conexion.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
#verifica que se haya enviado el formulario

    if($_POST){

    #para poder utlizar el php mailer




  #controlamos que todos los campos existan y no est'en vacíos
   if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['last']) && !empty($_POST['last'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['phone']) && !empty($_POST['phone'])) && (isset($_POST['query']) && !empty($_POST['query']))){

       require 'includes/Exception.php';
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';

        $nombre = $_POST['name'];
        $apellido = $_POST['last'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mensaje = $_POST['query'];

// Crea el Objeto
        $correoElectronico = new PHPMailer;
                // Emisor
        $correoElectronico->setFrom('info@jaenwebdesign.com', 'Hollingo Contact');
                // Receptor
        $correoElectronico->addAddress('info@jaenwebdesign.com', 'Hollingo');
        // Asunto
        $correoElectronico->Subject = 'Contact';
        // Mensaje
        // $correoElectronico->msgHTML('Esto es una prueba de HTML: <a href="https://google.com">Ir a Google</a>');
        // $correoElectronico->msgHTML(file_get_contents('assets/rsc/email_templates/index.html'), __DIR__);
        $correoElectronico->msgHTML('The following user has sent a message through our contact form:<br><br> Name: '.$nombre.'<br> Last Name: '.$apellido.'<br> Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$mensaje);
        // Mensaje Alternativo (si no carga el anterior)
        $correoElectronico->AltBody = 'El SEGUNDO contenido que queramos';
        // Codificación de Caracteres
        $correoElectronico->CharSet = 'UTF-8';
                
        //Enviar Mensaje verificando errores                             
        if (!$correoElectronico->send()){
            echo 'Error al enviar: '.$correoElectronico->ErrorInfo;
        }else{
            echo '<div class="alert alert-success position-absolute w-100" role="alert">
            Thank you for your message.
        </div>';
        }
    }else {

        echo 'erros';      
    }
}

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

	<title>Hollingo Web Development | Contact</title>
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
                    <li class="menu_item"><a href="about.php">About Us</a></li>
                    <li class="menu_item"><a href="#">Contact</a></li>
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
                <li><a class="mobileLinks" href="projects.php">PROJECTS</a></li> 
                <li><a class="mobileLinks" href="about.php">ABOUT</a></li> 
                <li><a class="mobileLinks" href="#">CONTACT</a></li> 
            </ul>

        </div>
        <!--Menu Mobile End-->

        <!--Background-->
        <div class="area4">
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
        </div >
        <!--Background End-->

        <!--Main Carousel-->
        <?php 
            $sqlQueryTexto = "
            SELECT * FROM `inicio` WHERE id LIKE 4;
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
                    <div class="intro_first_text"><p><?php echo $title;?></p></div>
                </div>
                <div class="intro_content_main d-flex align-items-center">
                    <h1>
                    <?php 
                        echo $text;
                        ?>
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

<!-- Section -->
<div class="container-fluid contactForm d-flex flex-column align-items-center justify-content-center">
    <div class="container col-sm-12 col-m-8 d-flex justify-content-center flex-column align-items-center h-100">
        <div class="formulario d-flex justify-content-center align-items-center">
            <form action="" method="POST" name="formuContact" class="d-flex flex-column justify-content-between ">
                <div class="row d-flex flex-column justify-content-center align-items-center h-50">
                    <input type="text" id="name" name="name" placeholder="First Name">
                    <input type="text" id="last" name="last" placeholder="Last Name">
                    <input type="email" id="email" name="email" placeholder="Email">
                    <input type="tel" id="phone" name="phone" placeholder="Phone">
                </div>

                <div class="row d-flex flex-column justify-content-center align-items-center h-50">
                    <textarea name="query" id="question" cols="30" rows="8" placeholder="How Can We Help?"></textarea>
                    <button class="formButton" type="submit">Drop Us A Line</button>
                </div>
            </form>
            <aside class="d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center h-50" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.923117430144!2d-3.711411984349746!3d40.47696585989717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422999167506b7%3A0xb4bf9f3f1a32ca93!2sPl.%20de%20Ver%C3%ADn%2C%207%2C%2028029%20Madrid!5e0!3m2!1sen!2ses!4v1641925776431!5m2!1sen!2ses" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="h-50 w-100">
                    <div class="addressTitle d-flex flex-column align-items-start justify-content-start">
                        <h4>ADDRESS</h4>
                        <div class="address">
                            <h5>MADRID</h5>
                            <p>Plaza de Verin 7,<br> 
                            28029, Madrid, Spain.</p>
                        </div>
                        <div class="address">
                            <h5>BARCELONA</h5>
                            <p>Av. Passeig de Gracia 75,<br> 
                            08005, Barcelona, Spain.</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
<!-- Section End-->

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
<script type="text/javascript" src="assets/js/contact.js"></script>

</body>
</html>