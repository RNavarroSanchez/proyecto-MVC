<h1>Crear Comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <!-- <input type="text" class="form-control" id="title" placeholder="Añade un" name="title"> -->
        <select class="form-select" aria-label="Default select example" name=user>
  <option selected>Elige tu usuario</option>
  <?php
  foreach ($users as $user)
        {
           echo "<option value=".$user['id'].">".$user['email']."</option>";
        }
        ?>     
</select>
<label for="post">Post</label>
<select class="form-select" aria-label="Default select example" name="post">
<option selected>Elige tu Post</option>
<?php
  foreach ($posts as $post)
        {
           echo "<option value=".$post['id'].">".$post['title']."</option>";
        }
        ?>     
</select>
    </div>

    <div class="form-group">
        <label for="comments">Comentarios</label>
        <input type="text" class="form-control" id="body" placeholder="Añade un comentario" name="body">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>