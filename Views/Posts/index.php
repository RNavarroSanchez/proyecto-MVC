<h1>Posts</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
      
        <tr>
            <th>ID</th>
           
            <th>Titulo</th>
            <th> Status</th>

            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
            echo "<td>" . $post['status'] . "</td>";
            echo "<td class='text-center'>
            
            <a href=" . WEBROOT . 'posts/detail/'.$post["id"] . " ><span class='fas fa-eye p-2'></span></a>
            <a href=" . WEBROOT . 'posts/delete/'.$post["id"] . "><span class='far fa-trash-alt p-2'></span></a>  
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>