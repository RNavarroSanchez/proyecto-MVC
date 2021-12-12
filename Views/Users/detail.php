
<div class="row col-md-12 centered">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3"> <?php echo $detail['name'] ?></h1>

    <p class="lead">  Id:  <?php echo $detail['id'] ?></p>
    <p class="lead">  Correo:  <?php echo $detail['email'] ?></p>
   
    <h1 class="display-3"> Comentarios Creados</h1>
  </div>
</div>
<?php

 foreach ($comments as $comment) {
      echo "<p class='lead'>".$comment["body"] ."</p>";
 }
 ?> <h1 class="display-3"> Post Creados</h1>
 </div>

<?php
foreach ($posts as $post) {
     echo "<p class='lead'>".$post["title"] ."</p>";
}
?>
  </div>
</div>

