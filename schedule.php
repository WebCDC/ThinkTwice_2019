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
    if( !isset($_SESSION['uaccess']) || $_SESSION['uaccess']<400){
        header("Location: index.php");
        exit();
    }
    if( $_POST && isset($_SESSION['ulogin']) && isset($_POST['post_id']) ){
        if(isset($_POST['toggle_state'])){
            $conn = new mysqli($servername, $username, $password);
            $conn->select_db("deti-thtw-web");
            if ($stmt = $conn->prepare("UPDATE f_posts SET state=CASE WHEN state=1 THEN 0 ELSE 1 END, chg_by=?, chg_date=CURRENT_DATE WHERE id=?")) {
                $stmt->bind_param("ss", $_SESSION['ulogin'], $_POST['post_id']);
                $stmt->execute();
            }
        }
        header('Location: '.$_SERVER['PHP_SELF']);
        exit();
    }
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
            <h2 class="section-heading text-uppercase">Horário</h2>
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
