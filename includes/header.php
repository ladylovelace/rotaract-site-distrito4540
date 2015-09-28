<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rotaract Club Distrito 4540">
    <meta name="author" content="Lemuel Roberto">

    <link rel="shortcut icon" href="http://beta.rotaract4540.org/images/rotaract-icon.png">

    <?php
    	$file = explode('/', $_SERVER['SCRIPT_NAME']);
      	switch ($file[2]) {
      		case 'clubs.php':
      			$title = "Clubes - ";
      		break;
      		case 'calendar.php':
      			$title = "Agenda - ";
      		break;
      		case 'events.php':
      			$title = "Eventos - ";
      		break;
      		case 'team.php':
      			$title = "Equipe - ";
      		break;
          case 'eap.php':
            $title = "EAP - ";
          break;
          case 'documents.php':
      			$title = "Documentos - ";
      		break;
      		case 'contact.php':
      			$title = "Contato - ";
      		break;
          case 'apoio.php':
            $title = "Apoio - ";
          break;
	      }
    ?>

    <title><?php echo $title; ?>Rotaract Distrito 4540</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rotaract.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php include_once("includes/analyticstracking.php") ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Rotaract Distrito 4540</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="clubs.php">Clubes</a>
                    </li>
                    <li>
                        <a href="calendar.php">Agenda</a>
                    </li>
                    <li>
                        <a href="events.php">Eventos</a>
                    </li>
                    <li>
                        <a href="team.php">Equipe</a>
                    </li>
                    <li>
                        <a href="eap.php">EAP</a>
                    </li>
                    <li>
                        <a href="documents.php">Documentos</a>
                    </li>
                    <li>
                        <a href="partners.php">Apoio</a>
                    </li>
                    <li>
                        <a href="contact.php">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <hr>
    <hr>
