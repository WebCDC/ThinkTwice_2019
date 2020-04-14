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
	<meta name="description" content="Think Twice Hackthon - Sponsors">
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
  <link href="static/css/agency.css" rel="stylesheet">
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
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading resize text-uppercase">Parceiros Gold</h2>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-3 col-sm-3 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/NEI.png" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-3 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/NEI.png" alt="">
            </a>
          </div>

          <div class="col-md-3 col-sm-3 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/NEI.png" alt="">
            </a>
          </div>
      
          <div class="col-md-3 col-sm-3 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="static/img/portfolio/IEEE.jpg" alt="">
            </a>
          </div>
          </div>
        </div>
      </div>
    </section>


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
