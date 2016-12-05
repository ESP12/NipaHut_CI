<?php
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/14/2016
 * Time: 8:53 PM
 */
class NipaHut_Model extends CI_Model{


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
            'username' => $this->input->post('register-username'),
            'guestpassword' => md5($this->input->post('register-password')),
            'firstname' => $this->input->post('register-firstname'),
            'lastname' => $this->input->post('register-lastname'),
            'gender' => $this->input->post('register-gender'),
            'emailaddress' => $this->input->post('register-emailaddress'),
            'mobilenumber' => $this->input->post('register-mobilenumber'),
        );


        return $this->db->insert('guest', $data);
    }

}