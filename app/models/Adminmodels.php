<?php
class Adminmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $dataPassword = $row->password;

        if ($password == $dataPassword) {
            return $row;
        } else {
            return false;
        }
    }

    public function add($data)
    {
        $this->db->query('INSERT INTO admin (nom, prenom, email, password, role) VALUES(:nom, :prenom, :email, :password, :role)');

        //Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        $this->db->query('SELECT * FROM admin order by ad_id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function delete($data)
    {
        $this->db->query('DELETE FROM admin WHERE ad_id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
