<?php
     

class commentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/comment.php');

        $comments = new Comment();

        $d['comments'] = $comments->showAllcomments();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        require (ROOT . 'Models/user.php');  

        $users = new User();
            
            $d['users'] = $users->showAllUsers();
            $this->set($d);

        if (isset($_POST["body"]))
        {
            require(ROOT . 'Models/comment.php');

            $comment= new Comment();
            

            if ($comment->create($_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        
    
        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComment($id);

        if (isset($_POST["body"]))
        {
            if ($comment->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/comment.php');

        $comment = new Comment();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comments/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>