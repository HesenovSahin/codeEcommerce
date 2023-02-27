<?php


defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Admins_model', 'admins_md');
    }

    public function index()
    {
        $data = [];
        if ($this->input->post()) {



            // $data['lists'] = $admins->select_all();


            $this->load->library('form_validation');
            $admins = new Admins_model();


            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Şifrə', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->admin('backend/login');
            }

            $request_data = [
                'email' => $this->security->xss_clean($this->input->post('email')),
                'password' => md5($this->input->post('password'))

            ];
            $data['admin'] = $admins->loggedin($request_data['email'], $request_data['password']);

            // print_r($data['admin']);
            if ($data['admin']) {
                $this->session->set_flashdata('success_message', 'Success');
                $this->session->set_userdata('admin', $data['admin']);
                $this->session->set_userdata('loggedin', 1);
                redirect('backend/dashboard');
            } else {
                $this->session->set_flashdata('error_message', 'Error');
                redirect('backend/login');
            }
        }

        $this->load->view('backend/login', $data);
    }


    public function logout()
    {
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('loggedin');
//        print_r($_SESSION);
//        exit();

        redirect('backend/login');
    }
}








// if ($_SERVER["REQUEST_METHOD"] == 'POST') {
//     if (!empty($_POST['username']) && !empty($_POST['password'])) {
//         $username = mysqli_real_escape_string($db, $_POST["username"]);
//         $password = md5($_POST["password"]);
//         $query = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' and password='$password'");
//         $admin = mysqli_fetch_array($query, MYSQLI_ASSOC);
//         if (!empty($admin) && $admin['status'] == 1) {
//             $_SESSION['user'] = $admin;
//             $_SESSION['logged_in'] = 1;
//             $_SESSION['success_message'] = "Successfuly";
//             header("Location:index.php");
//         } else {
//             $_SESSION['error_message'] = "Username or Password are incorrect";
//             header("Location:login.php");
//         }
//     } else {
//         $_SESSION['error_message'] = "Fields must  not be empty";
//         header("Location:login.php");
//     }
// } else {
//     echo "Not Allowed";
//     die();
// }


// session_start();
// session_destroy();
// header("Location:login.php");

