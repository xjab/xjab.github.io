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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">
    <link href="../css/half-slider.css" rel="stylesheet">
    <link href="../css/business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    require('../connect.php');
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
                <a class="navbar-brand page-scroll" href="../index.php"><tamez class="pantone">Teresa Tamez</tamez><white>Photography</white></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class='page-scroll' href='bodas.php'>Bodas</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='quinces.php'>Quinceañeras</a>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 2";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='retrato.php'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                    <li>
                        <a class='page-scroll' href='eventos.php'>Eventos</a>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 3";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='cursos.php'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                    <li>
                        <?php
                            $query = "SELECT * FROM titles WHERE id = 4";
                            $result = mysql_query($query, $link);
                            $row = mysql_fetch_assoc($result);
                            echo "<a class='page-scroll' href='contacto.php'>" . $row['title'] . "</a>";
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--<header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>-->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                        $query = "SELECT * FROM titles WHERE id = 3";
                        $result = mysql_query($query, $link);
                        $row = mysql_fetch_assoc($result);
                        echo "<h2 id='ache-dos' class='section-heading pantone'>" . $row['title'] . "</h2>";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="../img/cursos/camera.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Fotografía</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>
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
                                <img class="img-circle img-responsive" src="../img/cursos/photoshop.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Photoshop</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; xJAB 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-phone"></i></a>
                        </li>
                        <strong id="tel">123-456-789</strong>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/agency.js"></script>

</body>

<?php
    mysql_close($link);
?>

</html>
