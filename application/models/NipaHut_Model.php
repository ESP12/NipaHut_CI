<?php
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/14/2016
 * Time: 8:53 PM
 */
class NipaHut_Model extends CI_Model{

    public function __construct() {
        $this->load->database();
    }
    //user loagin
    public function login(){
        //initialize session
        $this->load->library('session');

        //retrieve data from database
      //  $login->load->query("SELECT * FROM guest WHERE (username )");
    }

    //new user is registered here
    public function register(){
        $data = array(
            'reg-guestNumber' => $this->input->post(null),
            'reg-username' => $this->input->post('register-username'),
            'reg-password' =>md5($this->input->post('register-password')),
            'reg-firstname' => $this->input->post('register-firstname'),
            'reg-lastname' => $this->input->post('register-lastname'),
            'reg-gender' => $this->input->post('register-gender'),
            'reg-email' => $this->input->post('register-emailaddress'),
            'reg-mobilenumber' => $this->input->post('register-mobilenumber'),
            'active' => $this->input->post(null)
        );


        return $this->db->insert('guest', $data);
    }

}