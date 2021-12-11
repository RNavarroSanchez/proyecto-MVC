<h1>Editar Comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Comentario</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce un titulo" name="body" value ="<?php if (isset($comment["body"])) echo $comment["body"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>