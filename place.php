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

	<meta name="description" content="Think Twice Hackthon - Como Chegar">
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
  <link href="static/css/place.css" rel="stylesheet">
  <!-- CSS do mapa -->
  <style> .myFrame { width: 100%; height: 460px; border: none; }</style>

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
    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
          <iframe class="myFrame" 
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDct-K2SVeeXsHqtGfdf2R7VvOyWzPXzI4
                &q=lojaua, Aveiro, PT">
              </iframe>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Como chegar?</h4>
              <p class="text-black-50 mb-0">O evento vai decorrer no Auditório Mestre Hélder Castanheira que também é conhecido pelo espaço da Loja UA.</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="static/img/place/estacao.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center project">
              <div class="d-flex">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-black">Vens de comboio?</h4>
		              <p class="mb-0 text-black-50">
                    Podes encontrar toda a informação sobre horários no site da <a href="https://www.cp.pt/passageiros/pt/consultar-horarios" target="_blank">CP</a>. O percurso até ao campus pode ser feito via: <br>
                    Autocarro (linha verde)<br>
                    A pé (demora cerca de 20 minutos a percorrer)<br>
                    Táxi (existe uma praça junto à estação)<br>
                    BUGA, a Bicicleta de Utilização Gratuita de Aveiro
                  </p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="static/img/place/autocarro.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-black">Vens de autocarro?</h4>
                  <p class="mb-0 text-black-50">
                  Quem vem de autocarro existem várias paragens na Universidade.
                  Para consultar os horários e informações podes aceder ao site da 
                  <a href="http://www.aveirobus.pt/circuito-urbano#horarios">Aveiro Bus</a>
                  </p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="static/img/place/carro.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-black">Vens de carro?</h4>
                  <p class="mb-0 text-black-50">
                  Quem vem de Norte pela auto-estrada A1, deve sair para Aveiro pela A25. 
                  Na A25 existem duas saídas para a cidade: Aveiro-Norte e, alguns quilómetros depois, Aveiro. Para quem se dirige para a Universidade de Aveiro a mais aconselhável é esta última.<br>
                  Quem vem de Sul pela A1, deve sair em Aveiro-Sul/Águeda (saída 15) e seguir pela EN235 até ao campus.
                  Podes <a href="static/documents/MapaUA.pdf" target="_blank">aqui</a> consultar o mapa do campus.
                  </p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
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
