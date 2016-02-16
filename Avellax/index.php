<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teresa Tamez Photography</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<?php
    require('connect.php');
?>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Teresa Tamez Photography</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 1";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='#portfolio'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 2";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='#team'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 3";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='#about'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 4";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='#contact'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div id="cap1" class="fill"></div>
                <div class="carousel-caption">
                    <a href="#contact" class="page-scroll btn btn-xl">Contáctanos</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div id="cap2" class="fill"></div>
                <div class="carousel-caption">
                    <a href="#contact" class="page-scroll btn btn-xl">Contáctanos</a>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div id="cap3" class="fill"></div>
                <div class="carousel-caption">
                    <a href="#contact" class="page-scroll btn btn-xl">Contáctanos</a>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <!--<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>-->

    <!-- Services Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                        $query = "SELECT * FROM titles WHERE id = 1";
                        $result = mysql_query($query, $link);
                        $row = mysql_fetch_assoc($result);
                        echo "<h2 class='section-heading'>" . $row['title'] . "</h2>";
                    ?>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/social/pre.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Prenunpcial</h4>
                        <p class="text-muted">Lorem ipsum</p>
                    </div>
                </div>
                <div class="col-md-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/social/quince.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>XV años</h4>
                        <p class="text-muted">Lorem ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                        $query = "SELECT * FROM titles WHERE id = 2";
                        $result = mysql_query($query, $link);
                        $row = mysql_fetch_assoc($result);
                        echo "<h2 class='section-heading'>" . $row['title'] . "</h2>";
                    ?>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/retrato/uno.png" class="img-responsive img-circle" alt="">
                        <h4>Lorem ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <p>
                            Aliquam ut hendrerit nisi. Phasellus scelerisque nunc tortor, ut dapibus arcu sodales sit amet. Suspendisse tempus arcu sed risus congue, a aliquam justo mattis. Ut lacinia consectetur sem in pulvinar. Nulla eget efficitur turpis, eu fringilla felis. Nunc nec risus quis arcu sagittis semper eget at diam. Aliquam at pulvinar elit. Sed pulvinar nibh maximus urna viverra cursus. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/retrato/dos.png" class="img-responsive img-circle" alt="">
                        <h4>Lorem ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <p>
                            Aliquam ut hendrerit nisi. Phasellus scelerisque nunc tortor, ut dapibus arcu sodales sit amet. Suspendisse tempus arcu sed risus congue, a aliquam justo mattis. Ut lacinia consectetur sem in pulvinar. Nulla eget efficitur turpis, eu fringilla felis. Nunc nec risus quis arcu sagittis semper eget at diam. Aliquam at pulvinar elit. Sed pulvinar nibh maximus urna viverra cursus. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/retrato/tres.png" class="img-responsive img-circle" alt="">
                        <h4>Lorem ipsum</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <p>
                            Aliquam ut hendrerit nisi. Phasellus scelerisque nunc tortor, ut dapibus arcu sodales sit amet. Suspendisse tempus arcu sed risus congue, a aliquam justo mattis. Ut lacinia consectetur sem in pulvinar. Nulla eget efficitur turpis, eu fringilla felis. Nunc nec risus quis arcu sagittis semper eget at diam. Aliquam at pulvinar elit. Sed pulvinar nibh maximus urna viverra cursus. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                        $query = "SELECT * FROM titles WHERE id = 3";
                        $result = mysql_query($query, $link);
                        $row = mysql_fetch_assoc($result);
                        echo "<h2 class='section-heading'>" . $row['title'] . "</h2>";
                    ?>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/cursos/camera.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Fotografía</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        En el curso básico de fotografía, aprenderás a manejar la cámara profesional o semiprofesional; 
                                        análoga o digital. Aprenderás a aprovechar todas sus funciones. 
                                        Realizarás fotografías en movimiento e imágenes estáticas. Aprenderás técnicas profesionales de 
                                        composición y cómo aprovechar la luz natural para transformar en arte una escena cotidiana.
                                        También realizarás fotografías en estudio con luz artificial, empleando diferentes tipos de iluminación.
                                        Y por qué no un poco de diversión haciendo fotografías de exposición múltiple.
                                        Este curso va dirigido a todo el que se interese en la fotografía para fines profesionales o de 
                                        recreación.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/cursos/photoshop.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Photoshop</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                        El curso de photoshop también va dirigido a profesionales o no profesionales de la fotografía.
                                        Aquí aprenderás a utilizar las herramientas digitales que te permitirán embellecer tus fotos.
                                        Convierte tus fotos de formato raw en blanco y negro para lograr verdaderas obras de arte.
                                        O bien, blanco y negro con un detalle a color, o duotono.
                                        Sabrás cómo realizar un fotomontaje digital, el uso de filtros, ajustes de imagen, cómo restaurar una
                                        fotografía antigua y maltratada, cómo adelgazar, aumentar, corregir facciones, blanquear dientes, 
                                        cambiar de color ojos y cabello, caricaturizar, efectos especiales...
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contáctanos</h2>
                    <h3 class="section-subheading text-muted">Solicita información sin compromiso</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Ingresa tu email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Ingresa tu teléfono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Escribe aquí tu mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Prenupcial</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/social/pre.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue eget metus vitae cursus. Nam turpis velit, mattis at varius tempor, viverra at diam. Nam ultricies eu nulla id suscipit. Morbi viverra, dui at interdum fringilla, eros quam varius urna, a blandit sem magna elementum risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis est sed lacus rhoncus varius. Vestibulum elementum mi ac tristique placerat. Nullam congue mi ex, ac vehicula ex congue scelerisque. 
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>XV años</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/social/quince.png" alt="">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue eget metus vitae cursus. Nam turpis velit, mattis at varius tempor, viverra at diam. Nam ultricies eu nulla id suscipit. Morbi viverra, dui at interdum fringilla, eros quam varius urna, a blandit sem magna elementum risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis est sed lacus rhoncus varius. Vestibulum elementum mi ac tristique placerat. Nullam congue mi ex, ac vehicula ex congue scelerisque. 
                            </p>                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

<?php
    mysql_close($link);
?>

</html>
