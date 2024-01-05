<?php
class Users extends Model{
    public function isLogged(){
        if(isset($_SESSION['lawappointment']) && !empty($_SESSION['lawappointment'])){
            return true;
        }
    }
    public function login($email, $password){
        $sql = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();
            if(password_verify($password, $data['password'])){
                $_SESSION['lawappointment'] = $data;
                return true;
            }
        }
    }
    public function register($name, $email, $password){
        $sql = $this->db->prepare('SELECT email FROM users WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $sql = $this->db->prepare('INSERT INTO users SET email = :email, name = :name, password = :password');
            $sql->bindValue(':email', $email);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':password', $password);
            $sql->execute();

            if($sql){
                return true;
            }
        }
    }
    public function edit($id, $name = null, $email = null, $password = null){
        $sql = $this->db->prepare('SELECT email FROM users WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() == 0){
            $sql = $this->db->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':password', $password);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql){
                return true;
            }
        }
    }
    public function logout(){
        unset($_SESSION['lawappointment']);
        return true;
    }
}