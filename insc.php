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
	<meta name="description" content="Think Twice Hackthon - Inscrições">
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
    <section id="schedule">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Inscrições</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2> Conteúdo brevemente disponível! </h2>
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
