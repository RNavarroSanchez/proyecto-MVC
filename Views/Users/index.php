<h1>Usuarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/proyecto-MVC/comments/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Usuario</a>
        <tr>
            <th>Email</th>
            <th>Nombre</th>

            <th class="text-center">Users+</th>
        </tr>
        </thead>
        <?php
        foreach ($users as $user)
        {
            echo '<tr>';
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
           
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/proyecto-MVC/Users/edit/" . $user["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/proyecto-MVC/Users/delete/" . $user["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>