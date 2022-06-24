<?php
class Coursescontroller extends Controller
{
    public function __construct()
    {
        $this->courseModel = $this->model('Coursesmodel');
    }

    public function add()
    {
        $data = [
            'titre' => '',
            'prof' => '',
            'niveau' => '',
            'matiere' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'titre' => trim($_POST['titre']),
                'prof' => trim($_POST['prof']),
                'niveau' => trim($_POST['niveau']),
                'matiere' => trim($_POST['matiere'])
            ];


            if ($this->courseModel->add($data)) {
                //Redirect to the login page
                header('location:' . URLROOT . '/pages/courses');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('courses', $data);
    }

    public function delete()
    {
        $data = ['id' => $_POST['crs_id']];
        if ($this->courseModel->delete($data)) {
            //Redirect to the login page
            header('location:' . URLROOT . '/pages/courses');
        } else {
            die('Something went wrong.');
        }
        $this->view('courses', $data);
    }
}
