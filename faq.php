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
	<meta name="description" content="Think Twice Hackthon - Horário">
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
	<link href="static/css/faq.css" rel="stylesheet">

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
    <section id="faq">
    <div class="container">
		<div class="row">
		<div class="col-lg-12 text-center">
			<h2 class="section-heading text-uppercase"> FAQ's </h2>
		</div>
		
		<!-- FAQ Theme 5 -->
		<div class="col-md-12">
			<div class="panel-group jag-faq-theme5 jag-faq-random-colors" id="jag-theme-5">
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_1">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						O que é?
					</div>
					<div id="collapse5_1" class="panel-collapse collapse">
						<div class="panel-body">
						O Think Twice é uma competição de programação que tem uma duração de 24 horas e decorrerá nos dias 9 e 10 de Março.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_3">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Quem deve participar?
					</div>
					<div id="collapse5_3" class="panel-collapse collapse">
						<div class="panel-body">
						Todos os alunos universitários que gostem de aprender, ser desafiados e queiram mostrar as suas capacidades nas áreas de programação.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_4">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						O que devo trazer?
					</div>
					<div id="collapse5_4" class="panel-collapse collapse">
						<div class="panel-body">
						É obrigatório trazer o portátil, para além disso recomendamos trazer saco cama para poderes relaxar e refrescar 
						as ideias e todos os acessórios que aches necessário mas acima de tudo a tua energia e as tuas melhores ideias!
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_5">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Qual o objetivo de participar?
					</div>
					<div id="collapse5_5" class="panel-collapse collapse">
						<div class="panel-body">
						O objetivo principal é envolver os alunos num ambiente propício à aprendizagem, pelo que 
						encorajamos partilha de soluções entre equipas, mas também o aspecto competitivo para 
						trazer o que há de melhor em cada equipa. 
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_6">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Existem prémios?
					</div>
					<div id="collapse5_6" class="panel-collapse collapse">
						<div class="panel-body">
						Existem prémios para as três equipas que alcançarem os três primeiros lugares.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_7">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Pagam transportes?
					</div>
					<div id="collapse5_7" class="panel-collapse collapse">
						<div class="panel-body">
						Não cobrimos qualquer tipo de despesas de viagens.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_8">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Existe algum código de conduta?
					</div>
					<div id="collapse5_8" class="panel-collapse collapse">
						<div class="panel-body">
						Existe, <a href="https://thinktwice.web.ua.pt/static/documents/Regulamento_Hackathon.pdf">vê aqui.</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="panel-group jag-faq-theme5 jag-faq-random-colors" id="jag-theme-5">
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_10">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Quero participar no Think Twice mas não tenho equipa. Podem ajudar-me?
					</div>
					<div id="collapse5_10" class="panel-collapse collapse">
						<div class="panel-body">
						Não te preocupes! Comunica a tua intenção de encontrar equipa na discussão do evento no Facebook.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_11">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Quero participar no Think Twice mas não sou de Aveiro. Podem ajudar-me?
					</div>
					<div id="collapse5_11" class="panel-collapse collapse">
						<div class="panel-body">
						Podes aceder à página de como chegar a competição <a href="https://thinktwice.web.ua.pt/place.php" target="_blank">aqui</a>
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_12">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Quero participar no Think Twice mas não tenho casa em Aveiro. Podem ajudar-me?
					</div>
					<div id="collapse5_12" class="panel-collapse collapse">
						<div class="panel-body">
						A competição decorre maioritariamente durante a noite num recinto com espaços 
						apropriados para descanso/dormir, pelo que não vais precisar de ter casa em 
						Aveiro.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_13">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Posso sair do recinto da competição?
					</div>
					<div id="collapse5_13" class="panel-collapse collapse">
						<div class="panel-body">
						Os participantes têm que se manter nos espaços designados da competição para 
						que consigamos assegurar a segurança de todos.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_14">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Não sou estudante universitário, posso inscrever-me no Think Twice?
					</div>
					<div id="collapse5_14" class="panel-collapse collapse">
						<div class="panel-body">
						Nesta versão do Think Twice estamos apenas a aceitar alunos matriculados em universidades portuguesas,
						pelo que não te poderás inscrever.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_15">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Como será avaliado o meu projeto?
					</div>
					<div id="collapse5_15" class="panel-collapse collapse">
						<div class="panel-body">
						O projeto vai ser avaliado em quatro vertentes, a solução dada, a sua apresentação,
						a eficiência e por último a documentação.
						</div>
					</div>
				</div>
				<div class="panel jag-faq-wrapper">
					<div class="jag-faq-title" data-toggle="collapse" data-parent="#jag-theme-5" href="#collapse5_16">
						<i class="jag-faq-icon-2 fa fa-plus"></i>
						Não sei fazer um Pitch, serei prejudicado?
					</div>
					<div id="collapse5_16" class="panel-collapse collapse">
						<div class="panel-body">
						Não, haverá uma formação de Pitch dada por um profissional experiente na área por isso todos estarão
						em pé de igualdade.
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

<?php 

  /**
   * JS personalizado chamado no path.php
   * 
   * @author Rui Coelho
   */

   startblock('custom_js')

?>
	<script src="static/js/flip.js" type="text/javascript"></script>
    <script src="static/js/jquery.matchHeight.js" type="text/javascript"></script>
    <script src="static/js/jag-faq-custom.js" type="text/javascript"></script>	

<?php 

  /**
   * Termino da chamada da personalização do JS
   * e retorno ao path.php
   * 
   * @author Rui Coelho
   */

   endblock() 

?>