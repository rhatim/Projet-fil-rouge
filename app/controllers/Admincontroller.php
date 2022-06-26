<?php
class Admincontroller extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Adminmodels');
    }

    public function login()
    {
        $data = [
            'email' => '',
            'password' => '',

            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),

                'emailError' => '',
                'passwordError' => ''
            ];
            if (empty($data['email'])) {
                $data['emailError'] = 'Entrer votre adresse email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Entrer votre password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->adminModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Mot de passe ou email est incorrect.';
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('adminlogin', $data);
    }

    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['nom'] = $user->nom;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['role'] = $user->role;
        header('location:' . URLROOT . '/pages/home');
    }

    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['nom']);
        unset($_SESSION['prenom']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/pages/adminlogin');
    }

    public function add()
    {
        $data = [
            'nom' => '',
            'prenom' => '',
            'email' => '',
            'password' => '',
            'role' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'nom' => trim($_POST['nom']),
                'prenom' => trim($_POST['prenom']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'role' => trim($_POST['role'])
            ];
            //Register user from model function
            if ($this->adminModel->add($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/pages/admins');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('home', $data);
    }

    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->adminModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/admins');
        } else {
            die('Something went wrong.');
        }
        $this->view('admins', $data);
    }

    public function get()
    {
        $this->db->query('SELECT * FROM admin order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }
}
