<h1>Usuarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href=" <?php echo WEBROOT . 'users/create' ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir Usuario</a>
        <tr>
            <th>Email</th>
            <th>Nombre</th>
            <th class="text-center">Users</th>
        </tr>
        </thead>
        <?php
        foreach ($users as $user)
        {
            echo '<tr>';
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
           
            echo "<td class='text-center'>
            <a href=" . WEBROOT . 'users/detail/'.$user["id"] . " ><span class='fas fa-eye w-33 p-2'></span></a>
            <a href=" . WEBROOT . 'users/edit/'.$user["id"] . "><span class='fas fa-edit p-2 w-33 '></span></a>
            <a href=" . WEBROOT . 'users/delete/'.$user["id"] . " ><span class='far fa-trash-alt p-2 w-33'></span></a> 
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>