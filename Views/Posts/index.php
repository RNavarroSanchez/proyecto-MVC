<h1>Posts</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
      
        <tr>
            <th>ID</th>
            <th>Comentario</th>

            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
           
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href=" . WEBROOT . 'posts/edit/'.$post["id"] . " ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href=" . WEBROOT . 'posts/delete/'.$post["id"] . " class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>