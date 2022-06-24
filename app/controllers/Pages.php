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
        $this->view('teachersregister');
    }

    public function teacherslogin()
    {
        $this->view('teacherslogin');
    }

    public function studentsregister()
    {
        $this->view('studentsregister');
    }

    public function studentslogin()
    {
        $this->view('studentslogin');
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
        require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Studentsmodel.php';
        $m = new Studentsmodel;

        if (isset($_GET['w'])) {
            $this->view('students', $m->getsearch($_GET['w']));
        } else {
            $this->view('students', $m->get());
        }
    }

    public function courses()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Coursesmodel.php';
        $m = new Coursesmodel;
        $this->view('courses', $m->get());
    }

    public function teachers()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Teachersmodel.php';
        $m = new Teachersmodel;
        $this->view('teachers', $m->get());
    }

    public function admins()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/fil_rouge/Projet-fil-rouge/app/models/Adminmodels.php';
        $m = new Adminmodels;
        $this->view('admins', $m->get());
    }
}
