<h1>Posts</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/proyecto-MVC/comments/create/" class="btn btn-primary btn-xs pull-right"> Añadir Post</a>
        <tr>
            <th>ID</th>
            <th>Comentario</th>

            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($comments as $comment)
        {
            echo '<tr>';
            echo "<td>" . $comment['id'] . "</td>";
            echo "<td>" . $comment['body'] . "</td>";
           
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/proyecto-MVC/comments/edit/" . $comment["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/proyecto-MVC/comments/delete/" . $comment["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>