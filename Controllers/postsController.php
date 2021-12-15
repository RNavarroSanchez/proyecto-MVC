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
        require(ROOT . 'Models/comment.php');  
        $comment = new Comment();

        if ($comment->deleteAllCommentsPost($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
        else{
            header("Location: " . WEBROOT . "posts/error");
        }

        $posts = new Post();
        if ($posts->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
        else{
            header("Location: " . WEBROOT . "posts/error");
        }
      

    }
    function detail($id)
    {
        require(ROOT . 'Models/post.php');
        $detail= new Post();

        $d["detail"] = $detail->showPost($id);
        $this->set($d);

        require(ROOT . 'Models/comment.php');

        $comments= new Comment();

        $d["comments"] = $comments->commentsOfPost($id);

        $this->set($d);
        $this->render("detail");
    }
    

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>