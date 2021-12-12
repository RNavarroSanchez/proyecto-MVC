<?php
class User extends Model
{
    public function create($email,$name,$password)
    {
        $sql = "INSERT INTO users (email , name , password, created_at, updated_at) VALUES (:email , :name , :password, :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'email' => $email,
                'name' => $name,
                'password' => md5($password),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showUser($id)
    {
        $sql = "SELECT * FROM users WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
  

    public function showAllUsers()
    {
        $sql = "SELECT * FROM users";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

  

    public function showAllcommentsUser($id)
    {
        $sql = " SELECT * FROM comments where user_id = (SELECT id from users where id =".$id.")";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
    public function showAllpostsUser($id)
    {
        $sql = " SELECT * FROM posts where user_id = (SELECT id from users where id =".$id.")";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function edit($id, $name, $email)
    {
        $sql = "UPDATE users SET name = :name, email = :email, updated_at = :updated_at  WHERE id = :id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'id' => $id,
                'name' => $name,
                'email' => $email,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM users WHERE id = ?';
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