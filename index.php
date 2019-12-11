
 <?php 
  include_once('head.php');
  include('funcoes.php');
 ?>
  <section id="banner">
    <h2>Compre nossos produtos! =)</h2>
  </section>
  <section id="servico" class="container mt-5">
    <div class="row">
      
      <?php  echo listarServicos();?>
    </div>
    
  </section>

  

<?php 
include_once('footer.php');

?>
</body>

</html>