<h1>Editar Usuario</h1>
<form method='post' action='#'>
<div class="form-group">
        <label for="email">Email</label>
         <input type="text" class="form-control" id="email" placeholder="Añade un email" name="email" value ="<?php if (isset($user["email"])) echo $user["email"];?>">
         
         <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Añade un usuario" name="name" value ="<?php if (isset($user["name"])) echo $user["name"];?>">
       
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>