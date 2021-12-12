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
        if (isset($_POST["email"],$_POST["name"]))
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

        if (isset($_POST["name"],$_POST["name"]))
        {
            if ($user->edit($id, $_POST["name"],$_POST["email"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }
        function detail($id)
    {
        require(ROOT . 'Models/user.php');
       
        $comments = new User();
        $d["comments"] = $comments->showAllcommentsUser($id);
        $this->set($d);

        $posts = new User();
        $d["posts"] = $posts->showAllpostsUser($id);
        $this->set($d);
       

        $detail= new User();
        $d["detail"] = $detail->showUser($id);
        $this->set($d);
        $this->render("detail");
    }


    function delete($id)
    {
        require(ROOT . 'Models/user.php');
        require(ROOT . 'Models/comment.php');
        require(ROOT . 'Models/post.php');
        $comment= new Comment();

        if ($comment->deleteAllCommentsUser($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
        else{
            header("Location: " . WEBROOT . "posts/error");
        }

        $posts = new Post();
        if ($posts->deleteAllPosts($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
        else{
            header("Location: " . WEBROOT . "posts/error");
        }
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