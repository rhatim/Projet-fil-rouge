<?php
class Pages extends Controller
{
    public function index()
    {
        $this->view('index');
    }
    public function adminlogin()
    {
        $this->view('adminlogin');
    }

    public function teachersregister()
    {
        if (!empty($_SESSION['role'])) {
            if ($_SESSION['role'] == 'Teacher') {
                $this->view('home');
            }
        } else {
            $this->view('teachersregister');
        }
    }

    public function teacherslogin()
    {
        if (!empty($_SESSION['role'])) {
            if ($_SESSION['role'] == 'Teacher') {
                $this->view('home');
            }
        } else {
            $this->view('teacherslogin');
        }
    }

    public function studentsregister()
    {
        if (!empty($_SESSION['role'])) {
            if ($_SESSION['role'] == 'Student') {
                $this->view('home');
            }
        } else {
            $this->view('studentsregister');
        }
    }

    public function studentslogin()
    {
        if (!empty($_SESSION['role'])) {
            if ($_SESSION['role'] == 'Student') {
                $this->view('home');
            }
        } else {
            $this->view('studentslogin');
        }
    }

    public function home()
    {
        if (!empty($_SESSION['role'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Studentsmodel.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Teachersmodel.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Adminmodels.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Coursesmodel.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Reservationsmodel.php';
            $s = new Studentsmodel;
            $t = new Teachersmodel;
            $c = new Coursesmodel;
            $a = new Adminmodels;
            $r = new Reservationsmodel;


            $this->view('home', ['reservation' => $r->get(), 'courses' => $c->get(), 'students' => $s->get(), 'teachers' => $t->get(), 'admins' => $a->get()]);
        } else {
            $this->view('index');
        }
    }

    public function students()
    {
        if (!empty($_SESSION['role'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Studentsmodel.php';
            $m = new Studentsmodel;
            $this->view('students', $m->get());
        } else {
            $this->view('index');
        }
    }

    public function courses()
    {
        if (!empty($_SESSION['role'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Coursesmodel.php';
            $m = new Coursesmodel;
            $this->view('courses', $m->get());
        } else {
            $this->view('index');
        }
    }

    public function teachers()
    {
        if (!empty($_SESSION['role'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Teachersmodel.php';
            $m = new Teachersmodel;
            $this->view('teachers', $m->get());
        } else {
            $this->view('index');
        }
    }

    public function admins()
    {
        if (!empty($_SESSION['role'])) {
            require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Adminmodels.php';
            $m = new Adminmodels;
            $this->view('admins', $m->get());
        } else {
            $this->view('index');
        }
    }
}
