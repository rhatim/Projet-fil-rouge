<?php
class Teachersmodel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        // var_dump($data);
        // exit();
        $this->db->query('INSERT INTO teachers (nom, prenom, email, phone, adresse, matiere, password) VALUES(:nom, :prenom, :email, :phone, :adresse, :matiere, :password)');

        //Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prénom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':matiere', $data['matiere']);
        $this->db->bind(':password', $data['password']);
        

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password) {
        $this->db->query('SELECT * FROM teachers WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM teachers WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);
        $this->db->execute();

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
