<?php 

  /**
   * Chamada ao path.php
   * 
   * @author Rui Coelho
   */
  include('path.php'); 

?>

<?php

  /**
   * Complemento do header chamado no path.php
   * 
   * @author Rui Coelho
   */

  startblock('head')

?>

	<meta name="description" content="Think Twice Hackthon">
	<title>Think Twice - Hackathon</title>

<?php

  /**
   * Termino do complemento e retorno ao path.php
   * 
   * @author Rui Coelho
   */
  
  endblock() 

?>

<?php 
  
  /**
   * CSS personalizado chamado no path.php
   * 
   * @author Rui Coelho
   */
  
   startblock('custom_css')

?>
    <link href="static/css/agency.min.css" rel="stylesheet">

<?php 

 /**
   * Termino da chamada da personalização do CSS 
   * e retorno ao path.php
   * 
   * @author Rui Coelho
   */
  
  endblock() 

?>


<?php

  /**
   * Complemento do header chamado no path.php
   * 
   * @author Rui Coelho
   */
  
   startblock('body')
?>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading text-uppercase">Pronto para pensar duas vezes?</div>
        <div class="intro-lead-in">Think Twice 2019</div>
      	<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" 
        style="background-color: #4D94D3; border-color: #4D94D3"
        href="https://docs.google.com/forms/u/1/d/e/1FAIpQLSeFrENVyovpcNpS8ZKa_av9vVawyr1H1Mk0olc0BLuRmV7irg/viewform" 
        target="_blank">Inscreve-te já!</a>
      </div>
    </div>
  </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">O que é o Think Twice?</h2>
            <h3 class="section-subheading text-muted">Competição de programadores</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">24 horas</h4>
            <p class="text-muted">Parte da premissa de 24 horas de programação, é como uma maratona só que para programadores</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Realização</h4>
            <p class="text-muted">Vai decorrer nos dias 9 e 10 de março.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-briefcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Feira de empresas</h4>
            <p class="text-muted">Aproveita ainda a feira de empresas dos patrocinadores do evento no dia 11 de Março!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- registration_documents Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading resize text-uppercase">Entidades Organizadoras</h2>
            <h3 class="section-subheading text-muted">O Think Twice surge de uma parceria entre o NEI e o IEEE, conhece um pouco mais sobre as mesmas.</h3>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/NEI.png" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>NEI</h4>
              <p class="text-muted">Núcleo de Estudantes de Informática</p>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/IEEE.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>IEEE</h4>
              <p class="text-muted">IEEE University of Aveiro Student Branch</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <!-- registration_documents Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="resize text-uppercase ">NEI</h2>
                  <p class="item-intro text-muted">Núcleo de Estudantes de Informática</p>
                  <p>O Núcleo de Estudantes de Informática da Associação Académica da Universidade de Aveiro foi criado a 24 de Janeiro de 2013 
                    e tem como principais objetivos ajudar, 
                    incentivar e promover diversas áreas relacionadas com Engenharia Informática.
                    Desde a sua criação o núcleo tem-se envolvido em várias atividades que não só abrange os estudantes 
                    do curso como também toda a comunidade académica, oferecendo uma melhor formação e desenvolvimento pessoal dos estudantes.
                  </p>
                  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://nei.web.ua.pt/" target="_blank">Ver website</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase resize">IEEE</h2>
                  <p class="item-intro text-muted">IEEE University of Aveiro Student Branch</p>
                  <p>Oficialmente fundada em 1989, o IEEE University of Aveiro Student Branch é o student branch mais antigo do país. 
                    É um ramo estudantil da maior associação internacional e organização técnica do mundo.
                    O seu objetivo, além da representação do IEEE na sua Universidade, é proporcionar a todos os alunos diversas atividades 
                    ligadas à engenharia, atividades de desenvolvimento de soft e hard-skills, aproximação ao mundo empresarial 
                    e ainda munir a comunidade académica com ferramentas e conhecimento extra-aulas.
                  </p>
                  <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="http://ieee.web.ua.pt/" target="_blank">Ver website</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php

  /**
   * Termino do complemento e retorno ao path.php
   * 
   * @author Rui Coelho
   */
  
  endblock()
?>
