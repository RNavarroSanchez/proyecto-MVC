<h1>Crear Comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Usuario</label>
        <!-- <input type="text" class="form-control" id="title" placeholder="Añade un" name="title"> -->
        <select class="form-select" aria-label="Default select example">
  <option selected>Elige tu usuario</option>
  <?php
  foreach ($users as $user)
        {
           echo "<option value=".$user['id'].">".$user['email']."</option>";
        }
        ?>     
</select>
    </div>

    <div class="form-group">
        <label for="comments">Comentarios</label>
        <input type="text" class="form-control" id="description" placeholder="Añade un comentario" name="comment">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>