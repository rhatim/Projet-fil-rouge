<?php
class Teacherscontroller extends Controller
{
    public function __construct()
    {
        $this->teacherModel = $this->model('Teachersmodel');
    }

    public function register()
    {
        $data = [
            'nom' => '',
            'prénom' => '',
            'email' => '',
            'phone' => '',
            'adresse' => '',
            'matiere' => '',
            'password' => '',
            'confirmPassword' => '',
            'role' => '',


            'nomError' => '',
            'prénomError' => '',
            'emailError' => '',
            'phoneError' => '',
            'adresseError' => '',
            'matiereError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'nom' => trim($_POST['nom']),
                'prénom' => trim($_POST['prénom']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'adresse' => trim($_POST['adresse']),
                'matiere' => trim($_POST['matiere']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'role' => trim($_POST['role']),


                'nomError' => '',
                'prénomError' => '',
                'emailError' => '',
                'phoneError' => '',
                'adresseError' => '',
                'matiereError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];


            $nameValidation = "/^[a-zA-Z0-9]*$/"; // regex 
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['nom'])) {
                $data['nomError'] = 'Entrer votre Nom';
            } elseif (!preg_match($nameValidation, $data['nom'])) {
                $data['nomError'] = 'Le nom doit comporter des lettres et des chiffres.';
            }

            if (empty($data['prénom'])) {
                $data['prénomError'] = 'Entrer votre prénom';
            } elseif (!preg_match($nameValidation, $data['prénom'])) {
                $data['prénomError'] = 'Le prénom doit comporter des lettres et des chiffres.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Entrer votre adresse email.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Le format email n\'est pas valide.';
            } else {
                //Check if email exists.
                if ($this->teacherModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Votre email est dèja utilisé.';
                }
            }

            // Validate password on length, numeric values,
            if (empty($data['password'])) {
                $data['passwordError'] = 'Entrer votre password.';
            } elseif (strlen($data['password']) < 6) {
                $data['passwordError'] = 'Password doit avoir minimum 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password doit avoir une valeur de type chiffre.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Entrer votre password de confirmation.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Votre confirmation n\'est pas valide.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['nomError']) && empty($data['prénomError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->teacherModel->register($data)) {
                    //Redirect to the login page
                    header('location:' . URLROOT . '/pages/teacherslogin');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('teachersregister', $data);
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
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

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
                $loggedInUser = $this->teacherModel->login($data['email'], $data['password']);

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
        $this->view('teacherslogin', $data);
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
        header('location:' . URLROOT . '/pages/login');
    }

    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->teacherModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/teachers');
        } else {
            die('Something went wrong.');
        }
        $this->view('home', $data);
    }
}
