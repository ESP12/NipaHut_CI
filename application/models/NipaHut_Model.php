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
        $this->load->model('NipaHut_Model');
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

            'Username' => $this->input->post('register-username'),
            'guestPassword' =>md5($this->input->post('register-password')),
            'FirstName' => $this->input->post('register-firstname'),
            'LastName' => $this->input->post('register-lastname'),
            'Gender' => $this->input->post('register-gender'),
            'EmailAddress' => $this->input->post('register-emailaddress'),
            'MobileNumber' => $this->input->post('register-mobilenumber'),
        );


        return $this->db->insert('guest', $data);
    }

}