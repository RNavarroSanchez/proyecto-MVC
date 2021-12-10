<?php
     

class postsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/post.php');

        $posts = new Post();

        $d['posts'] = $posts->showAllPosts();
        $this->set($d);
        $this->render("index");
    }

    function delete($id)
    {
        require(ROOT . 'Models/post.php');

        $posts = new Post();
        if ($posts->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
        else{
            header("Location: " . WEBROOT . "posts/error");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>