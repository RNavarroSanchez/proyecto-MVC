<?php
class Post extends Model
{
    public function create($title,$status,$user_id)
    {
        $sql = "INSERT INTO users (id, status , title , user_id , created_at, updated_at) VALUES (:id, :status , :title , :user_id , :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'status' => $status,
                'title' => $title,
                'user_id' =>$user_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showPost($id)
    {
        $sql = "SELECT * FROM posts WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showAllPosts()
    {
        $sql = "SELECT * FROM posts";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
   
    public function delete($id)
    {
        $sql = 'DELETE FROM posts WHERE id = ?';
        try{   
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([$id]);
       
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
     public function deleteAllPosts($id)
    {
        $sql = 'DELETE FROM posts WHERE user_id = ?';
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