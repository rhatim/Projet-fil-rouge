<?php
class Reservationsmodel {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function add($data)
    {
        $this->db->query('INSERT INTO reservations (std_name, crs_titre, crs_matiere) VALUES(:std_name, :crs_titre, :crs_matiere)');

        //Bind values
        $this->db->bind(':std_name', $data['std_name']);
        $this->db->bind(':crs_titre', $data['crs_titre']);
        $this->db->bind(':crs_matiere', $data['crs_matiere']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        $this->db->query('SELECT * FROM reservations order by res_id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function delete($data)
    {
        $this->db->query('DELETE FROM reservations WHERE res_id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
