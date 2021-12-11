<?php

class usersController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/user.php');

        $users = new User();

        $d['users'] = $users->showAllUsers();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["email"]))
        {
            require(ROOT . 'Models/user.php');

            $user= new User();

            if ($user->create($_POST["email"],$_POST["name"],$_POST["password"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        
        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/user.php');

        $user= new User();

        $d["user"] = $user->showUser($id);

        if (isset($_POST["name"]))
        {
            if ($user->edit($id, $_POST["name"],$_POST["email"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/user.php');

        $user= new User();
        if ($user->delete($id))
        {
            header("Location: " . WEBROOT . "users/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>