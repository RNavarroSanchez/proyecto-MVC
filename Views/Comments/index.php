<h1>Comentarios</h1>
<div class="row col-md-12 centered">

    <table class="table table-striped custab">
        <thead>
        <a href=" <?php echo WEBROOT . 'comments/create' ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Comentario</a>
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
            echo "<td class='w-75'>" . $comment['body'] . "</td>";
            echo "<td class='text-center'>
            <a href=" . WEBROOT . 'comments/detail/'.$comment["id"] . "  ><span class='fas fa-eye w-33  p-2 align-middle'></span></a>
            <a href=" . WEBROOT . 'comments/edit/'.$comment["id"] . " ><span class='fas fa-edit w-33 p-2 align-middle'></span></a>
            <a href=" . WEBROOT . 'comments/delete/'.$comment["id"] . " ><span class='far fa-trash-alt p-2 w-33 align-middle'></span></a>
           </td>";
            echo "</tr>";
        }
      
        ?>
    </table>

    
</div>




