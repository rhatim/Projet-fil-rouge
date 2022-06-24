<?php
class Coursesmodel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data)
    {
        // var_dump($data);
        // exit();
        $this->db->query('INSERT INTO courses (titre, prof, niveau, matiere) VALUES(:titre, :prof, :niveau, :matiere)');

        //Bind values
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':prof', $data['prof']);
        $this->db->bind(':niveau', $data['niveau']);
        $this->db->bind(':matiere', $data['matiere']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function get()
    {
        $this->db->query('SELECT * FROM courses order by crs_id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function delete($data)
    {
        $this->db->query('DELETE FROM courses WHERE crs_id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
