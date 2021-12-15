<h1>Post</h1>

<div class="row col-md-12 centered">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Detalle Post nº <?php echo $detail['id'] ?></h1>

    <p class="lead">  Titulo</p>
  </div>
</div>
 <i>  <?php echo $detail['title'] ?></i>

 <?php
   if(count($comments) != 0){
      echo  "<h1 class='display-3'> Comentarios </h1> ";

    foreach ($comments as $comment) {
    echo "<p class='lead'>".$comment['body'] ."</p>";
 }
}
?>

</div>
