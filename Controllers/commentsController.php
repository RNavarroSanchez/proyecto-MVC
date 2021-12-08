<?php

class commentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/comment.php');

        $comments = new comment();

        $d['comments'] = $comments->showAllcomments();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/comment.php');

            $comment= new comment();

            if ($comment->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/comment.php');
        $comment= new comment();

        $d["comment"] = $comment->showcomment($id);

        if (isset($_POST["title"]))
        {
            if ($comment->edit($id, $_POST["title"], $_POST["description"]))
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

        $comment = new comment();
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