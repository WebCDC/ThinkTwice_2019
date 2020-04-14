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

	<meta name="description" content="Think Twice Hackthon - Equipa">
	<title>Think Twice - Hackathon</title>
  <link href="static/css/agency.css" rel="stylesheet">

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
   * Complemento do header chamado no path.php
   * 
   * @author Rui Coelho
   */

   startblock('body')
?>
<!-- Team -->
<section class="bg-light" id="team">
      <div class="container">

      	<!-- Coordenação -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Equipa</h2>
            <h2 class="section-subheading text-muted">Coordenação</h2>       
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/1.jpg" alt="">
              <h4>João Abílio Rodrigues</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/joaoarodrigues9/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/2.jpg" alt="">
              <h4>Davide Morgado</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/davide-mieet/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/3.jpg" alt="">
              <h4>Tomás Costa</h4>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/tomascostax/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- IT -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-muted">Information Technology</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/4.jpg" alt="">
              <h4>Rui Coelho</h4>
              <p class="text-muted">Responsável de Secção IT</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/ruimigueloliveiracoelho/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/5.jpg" alt="">
              <h4>João Vasconcelos</h4>
              <p class="text-muted">Vogal da Secção de IT</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/joão-vasconcelos/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Relações Externas -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-muted">Relações Externas</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/6.jpg" alt="">
              <h4>Tomás Batista</h4>
              <p class="text-muted">Vogal da Secção de Relações Externas</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/tomas99batista/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/7.jpg" alt="">
              <h4>Rafael Direito</h4>
              <p class="text-muted">Responsável de Secção de Relações Externas</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/rafael-direito-a39954152/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/8.jpg" alt="">
              <h4>Inês Filipa Lopes</h4>
              <p class="text-muted">Vogal da Secção de Relações Externas</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                <a onclick="alert('Não possui LinkedIn')">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Marketing e Imagem -->
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-muted">Marketing e Imagem</h2>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/16.jpg" alt="">
              <h4>Flávia Figueiredo</h4>
              <p class="text-muted">Vogal da Secção de Marketing e Imagem</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/flavia-figueiredo/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/9.jpg" alt="">
              <h4>Leonardo Patrício</h4>
              <p class="text-muted">Responsável de Secção de Marketing e Imagem</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/thisisfolden/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/10.jpg" alt="">
              <h4>Andreia Lopes</h4>
              <p class="text-muted">Vogal da Secção de Marketing e Imagem</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/andreiacglopes" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Logística --> 
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-subheading text-muted">Logística</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/11.jpg" alt="">
              <h4>Tiago Lima</h4>
              <p class="text-muted">Vogal da Secção de Logística</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/tiago-lima-151b5b15a/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/12.jpg" alt="">
              <h4>Tiago Cardoso</h4>
              <p class="text-muted">Responsável de Secção de Logística</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/tkardozo/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/13.jpg" alt="">
              <h4>Joana Soeiro</h4>
              <p class="text-muted">Vogal da Secção de Logística</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/joana-soeiro-88254015b/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="static/img/team/14.jpg" alt="">
              <h4>Hugo Paiva</h4>
              <p class="text-muted">Vogal da Secção de Logística</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/hugofpaiva/" target="_blank">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
        
        <!--
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">#SousaPinto.</p>
          </div>Usar se for preciso, se não for, apagar!-->
        </div>
      </div>
    </section>

<?php

  /**
   * Termino do complemento e retorno ao path.php
   * 
   * @author Rui Coelho
   */

   endblock()
?>
