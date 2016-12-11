<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/13/2016
 * Time: 9:36 PM
 */


class NipaHut_Controller extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('NipaHut_Model');
    }

    public function index(){

        $this->load->view("template/header");
        $this->Login_form();
        $this->load->view("carousel/carousel");
        $this->load->view("content/index");
        $this->load->view("template/footer");

    }

    public function Login_form(){
        $result = $this->NipaHut_Model->login();

        if ($result == TRUE) {
            $username = $this->input->post('login-username');
            $result = $this->NipaHut_Model->read_user_information($username);
            if ($result != false) {
                if ($result['page'] == 'admin'){
                    $session_data = array(
                        'username' => $result[0]->username,
                        'password' => $result[0]->passwords,
                    );
                }elseif($result['page'] == 'guest'){
                    $session_data = array(
                        'username' => $result[0]->Username,
                        'password' => $result[0]->guestpassword,
                    );
                }else{
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->index($data);
                }
            }
         // add user data session
            $this->session->set_userdata('logged_in', $session_data);

            if ($result['page'] == 'admin'){
                $this->load->Admin_login();
            }elseif ($result['page'] == 'guest'){
                $this->load->Guest_Login();
            }
        }else{
            $data = array(
                'error_message' => 'Invalid Username or Password'
            );
            $this->load->index($data);
        }
    }

    public function Rooms_User(){
        $this->load->view("template/header");
        $this->load->view("content/Rooms-User");
        $this->load->view("template/footer");
    }

    public function SignUp(){
        //Initialize Session
        $this->load->library('session');
        $this->load->library('form_validation');

        //Set Validation
        $this->form_validation->set_rules('register-password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('register-confirmpassword', 'Confirm Password', 'trim|required|matches[register-password]|md5');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view("template/header");
            $this->load->view("content/Registration/SignUp");
            $this->load->view("template/footer");
        }
        else
        {
            $this->NipaHut_Model->register();

            $data = array(
                'firstname' => $this->input->post('register-firstname'),
                'lastname' => $this->input->post('register-lastname'),
                'gender' => $this->input->post('register-gender'),
                'email' => $this->input->post('register-emailaddress'),
                'mobile' => $this->input->post('register-mobilenumber'),
                'username' => $this->input->post('register-username')
            );

            $this->load->view("template/header");
            $this->load->view("content/Registration/success-signUp",$data);
            $this->load->view("template/footer");
        }
    }

    public function Reservation_Step_1(){
        $this->load->view("template/headerReservation");
        $this->load->view("content/ReservationPro/Reservation_Process_1");
        $this->load->view("template/footerReservation");
    }

    public function Reservation_Step_2(){
        $this->load->view("template/headerReservation");
        $this->load->view("content/ReservationPro/Reservation_Process_2");
        $this->load->view("template/footerReservation");
    }

    public function  Reservation_Step_3(){
        $this->load->view("template/headerReservation");
        $this->load->view("content/ReservationPro/Reservation_Process_3");
        $this->load->view("template/footerReservation");
    }

    public function Reservation_Step_4(){
        $this->load->view("template/headerReservation");
        $this->load->view("content/ReservationPro/Reservation_Process_4");
        $this->load->view("template/footerReservation");
    }

    /**
     * @return object
     */
    public function Guest_Reservation_Status()
    {
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/ReservationPro/GuestReservation_Status");
        $this->load->view("template/footer");
    }

    public function Guest_Edit_Account()
    {
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/ReservationPro/guestEditAccount");
        $this->load->view("template/footer");
    }

    public function Guest_Login(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/ReservationPro/guestLogin");
        $this->load->view("template/footer");
    }

    public function Admin_rooms(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/Admin/admin_Rooms");
        $this->load->view("template/footer");
    }

    public function Admin_reservations(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/Admin/admin_Reservations");
        $this->load->view("template/footer");
    }

    public function Admin_login(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/Admin/admin_Login");
        $this->load->view("template/footer");
    }

    public function Admin_admins(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/Admin/admin_Admins");
        $this->load->view("template/footer");
    }


    public function Admin_billing(){
        $this->load->view("template/GuestheaderReservation_Status");
        $this->load->view("content/Admin/admin_Billing");
        $this->load->view("template/footer");
    }
}

