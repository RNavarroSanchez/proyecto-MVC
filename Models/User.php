<?php
class User extends Model
{
    public function create($email,$name,$password)
    {
        $sql = "INSERT INTO users (id, email , name , password, remember_token , created_at, updated_at) VALUES (:id, :email , :name , :password, :remember_token , :created_at, :updated_at)";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'email' => $email,
                'name' => $name,
                'password' =>$password,
                'remember_token' => "roberto",
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
        $sql = "SELECT id FROM users WHERE id =" . $id;
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
    public function edit($id,$name, $password)
    {
        $sql = "UPDATE users SET name = :name, password = :password  WHERE user_id = :user_id";
        try{
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'user_id' => $id,
                'name' => $name,
                'password' => $password  
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM user WHERE id = ?';
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