<?php
class Comment extends Model
{
    public function create($body,$user_id,$post_id)
    {
        $sql = "INSERT INTO comments (user_id, body, post_id, created_at, updated_at) VALUES (:user_id, :body, :post_id, :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'user_id' => $user_id,
                'post_id' => $post_id,
                'body' => $body,      
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showComment($id)
    {
        $sql = "SELECT * FROM comments WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
       public function showUserComment($id)
    {
        $sql = "SELECT * FROM users where id = (SELECT user_id from comments where id =" . $id.")";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showAllcomments()
    {
        $sql = "SELECT * FROM comments";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
   

    public function edit($id, $body)
    {
        $sql = "UPDATE comments SET body = :body , updated_at = :updated_at WHERE id = :id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'id' => $id,
                'body' => $body,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM comments WHERE id = ?';
        try{   
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([$id]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
}
?>