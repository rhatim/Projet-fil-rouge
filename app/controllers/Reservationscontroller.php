<?php
class Reservationscontroller extends Controller
{
    public function __construct()
    {
        $this->resModel = $this->model('Reservationsmodel');
    }

    public function add()
    {
        $data = [
            'std_name' => '',
            'crs_titre' => '',
            'crs_matiere' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'std_name' => trim($_POST['std_name']),
                'crs_titre' => trim($_POST['crs_titre']),
                'crs_matiere' => trim($_POST['crs_matiere'])
            ];

            if ($this->resModel->add($data)) {
                //Redirect to the login page
                header('location:' . URLROOT . '/pages/home');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('home');
    }

    public function delete()
    {
        $data = ['id' => $_POST['res_id']];
        if ($this->resModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/home');
        } else {
            die('Something went wrong.');
        }
        $this->view('home', $data);
    }
}
