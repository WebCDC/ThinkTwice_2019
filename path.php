<?php
  /**
	  * Início da comunicação com o servidor.
	  * Introdução dos dados fornecidos pelo utilizador
    * e validação dos mesmos.
    *
    * Nota: de momento a base de dados não se encontra a ser utilizada.
    * Apenas de encontra conectada para evitar trabalho para as futuras equipas.
    * 
   	* @author Rui Coelho
	*/
	
	ob_start();
	session_start();
	require_once('ti.php');
	$servername = "mysql-sa.mgmt.ua.pt";
	$username = "deti-thtw-web";
	$password = "Q4ICoHbGntraIPgd";
	
	// Session Timeout of 30 min
	if (isset($_SESSION['timeout']) && (time() - $_SESSION['timeout'] > 1800)) {
		session_unset();
		session_destroy();
	}
	
	//  MUST BE REMOVED BEFORE PROD
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="pt-pt">

<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="static/img/logos/thinktwice.png" type="image/x-icon" />
    <meta name="description" content="">
    <meta name="author" content="">

  <?php 
    
    /**
     * Chamada do complemento do header
     * 
     * @author Rui Coelho
     */
    
    startblock('head')
  ?>
  <?php

    /**
     * Retorno ao ficheiro de path.
     * 
     * @author Rui Coelho
     */

    endblock()
  ?>

    <!-- Bootstrap core CSS -->
    <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="static/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <?php
    
    /**
     * Chamada do CSS Personalizado
     * 
     * @author Rui Coelho
     */

    startblock('custom_css') 
  ?>

  <?php

    /**
     * Retorno ao ficheiro de path.
     * 
     * @author Rui Coelho
     */

    endblock()
  ?>
</head>

<body id="page-top">
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html#page-top"></a>
          <a href="index.php"><img src="static/img/logos/thinktwice.png" alt="ThinkTwice" style="width:60px;height:60px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#services">O que é?</a>
            </li>
            <?php if(isset($_SESSION['uaccess']) && $_SESSION['uaccess']>=500) : ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="schedule.php#schedule">Horário</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="team.php#team">Equipa</a>
            </li>
            <?php if(isset($_SESSION['uaccess']) && $_SESSION['uaccess']>=500) : ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sponsors.php">Patrocinadores</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="place.php">Como chegar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="faq.php">FAQ's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="static/documents/Regulamento_Hackathon.pdf" target="_blank">Regulamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" 
              href="https://docs.google.com/forms/d/e/1FAIpQLSeFrENVyovpcNpS8ZKa_av9vVawyr1H1Mk0olc0BLuRmV7irg/viewform"
              target="_blank">
              <strong>Inscreve-te!</strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
    <?php

      /**
       * Chamada do CSS Personalizado
       * 
       * @author Rui Coelho
       */
      startblock('body')  
    ?>
    <?php 
      
      /**
       * Retorno ao ficheiro de path.
       * 
       * @author Rui Coelho
       */
      endblock()
    ?>

        <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; NEI- AAUAv & IEEE UA SB  <br>
            	Developed by <a href="https://user-cube.github.io/aboutMePT/" rel="nofollow">rc</a></span>
          </div>
          <div class="col-md-4">
          	<h2>NEI-AAUAv</h2>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/nei.aauav/">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/nei.aauav">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/nei-aauav/">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
          	<h2>IEEE UA SB</h2>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/ieeeuasbpt/">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/ieeeuasbpt/">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/ieeeuniversityofaveirostudentbranch/">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
      </div>
    </footer>
	
	<!-- Bootstrap core JavaScript -->
    <script src="static/vendor/jquery/jquery.min.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="static/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for this template -->
    <script src="static/js/agency.min.js"></script>


  <?php
    /**
    * Chamada do JS Personalizado
    * 
    * @author Rui Coelho
    */
    startblock('custom_js')
  ?>
  <?php
    /**
     * Retorno ao ficheiro path e 
     * finalização do conteúdo a apresentar.
     * 
     * @author Rui Coelho
     */
    endblock()
  ?>


</body>
</html>
