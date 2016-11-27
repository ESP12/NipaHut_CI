<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/13/2016
 * Time: 9:36 PM
 */


class NipaHut_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->database();
        $this->load->view("template/header");
        $this->load->view("carousel/carousel");
        $this->load->view("content/index");
        $this->load->view("template/footer");
    }

    public function Rooms_User(){
        $this->load->view("template/header");
        $this->load->view("content/Rooms-User");
        $this->load->view("template/footer");
    }

    public function SignUp(){
        $this->load->view("template/headerReservation");
        $this->load->view("content/Registration/SignUp");
        $this->load->view("template/footer");
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

